@extends('admin.layouts.base')

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="ion ion-ios-people"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Jumlah Penduduk</span>
	      <span class="info-box-number">{{$total}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>

	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-yellow"><i class="ion ion-person"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Kepala Keluarga</span>
	      <span class="info-box-number">{{$leader}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>

	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>
		
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-aqua"><i class="ion ion-male"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Laki - laki</span>
	      <span class="info-box-number">{{$male}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-red"><i class="fa ion-female"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Perempuan</span>
	      <span class="info-box-number">{{$female}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->


	
<!-- /.col -->
</div>
<!-- /.row -->
@endsection