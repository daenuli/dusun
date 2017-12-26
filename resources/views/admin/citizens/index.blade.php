@extends('admin.layouts.base')

@section('head-script')
<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
<div class="box">
	<div class="box-header with-border">
	  	<h3 class="box-title">Title</h3>

	  	<div class="box-tools pull-right">
	    	<a href="{{$create}}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>
	  	</div>
	</div>
	<div class="box-body">
      	<table id="example2" class="table table-bordered table-hover">
	        <thead>
		        <tr>
		          <th>#</th>
		          <th>Nama</th>
		          <th>No. KK</th>
		          <th>NIK</th>
		          <th>Jenis Kelamin</th>
		          <th>Tanggal Lahir</th>
		          <th>Agama</th>
		          <th>Created At</th>
		          <th></th>
		        </tr>
	        </thead>
	        <tbody>
	        </tbody>
    	</table>
	</div>
	<div class="box-footer">
	  Footer
	</div>
</div>
@endsection

@section('end-script')
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
	var table;
	$(function() {
	    table = $('#example2').DataTable({
	        processing: true,
	        serverSide: true,
	        bInfo:false,
	        ajax: '{{$ajax}}',
    		order: [[7,'desc']],
	        columns: [
	            { data: 'id', searchable: false, orderable: false},
	            { data: 'name', searchable: false, orderable: false},
	            { data: 'kk_number', searchable: false, orderable: false},
	            { data: 'nik', searchable: false, orderable: false},
	            { data: 'sex_id', searchable: false, orderable: false},
	            { data: 'birth_date', searchable: false, orderable: false},
	            { data: 'religion_id', searchable: false, orderable: false},
	            { data: 'created_at', searchable: false},
	            { data: 'action', searchable: false, orderable: false}
	        ],
	        columnDefs: [{
	          "targets": 0,
	          "searchable": false,
	          "orderable": false,
	          "data": null,
	          // "title": 'No.',
	          "render": function (data, type, full, meta) {
	              return meta.settings._iDisplayStart + meta.row + 1; 
	          }
	        }],
	    });
	});
</script>
@endsection
