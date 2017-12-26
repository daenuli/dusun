<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Traits\CrudTrait;
use App\Model\Citizens;
use DataTables;
use Form;

class CitizensController extends Controller
{
    private $folder = 'admin.citizens';
    private $uri = 'admin.citizens';
    private $title = 'Citizens';
    private $desc = 'Description';

    use CrudTrait;

    public function __construct(Citizens $table) 
    {
    	$this->table = $table;
    }

    public function index()
    {
    	$data['ajax'] = route($this->uri.'.data');
    	$data['create'] = route($this->uri.'.create');
    	return view($this->folder.'.index',$data);
    }

    public function data(Request $request)
    {
    	if ($request->ajax()) {
    		$data = $this->table->select(['id','kk_number','name','nik','sex_id','birth_date','religion_id','created_at']);
    		return DataTables::of($data)
            // ->editColumn('id','<input type="checkbox" class="checkbox" name="id[]" value="{{$id}}"/>')
                ->editColumn('sex_id', function ($index) {
                    return $index->sex->name;
                })
                ->editColumn('religion_id', function ($index) {
                    return $index->religion->name;
                })
                ->editColumn('birth_date', function ($index) {
                    return date('d F Y', strtotime($index->birth_date));
                })
	            ->addColumn('action', function ($index) {
	                $tag = Form::open(array("url" => route($this->uri.'.destroy',$index->id), "method" => "DELETE"));
	                $tag .= "<a href=".route($this->uri.'.edit',$index->id)." class='btn btn-primary btn-xs'>EDIT</a>";
	                $tag .= " <a href=".route($this->uri.'.show',$index->id)." class='btn btn-success btn-xs'>Detail</a>";
	                $tag .= " <button type='submit' class='delete btn btn-danger btn-xs'>Delete</button>";
	                $tag .= Form::close();
	                return $tag;
	            })
	    		->rawColumns(['action'])
	    		->make(true);
    	}
    }

    public function show($id)
    {
    	$data['detail'] = Citizens::findOrFail($id);
    	return view($this->folder.'.show', $data);
    }

    public function create(FormBuilder $formBuilder)
    {
        $data['form'] = $formBuilder->create('App\Forms\CitizenForm', [
            'method' => 'POST',
            'url' => route($this->uri.'.store')
        ]);
        $data['url'] = route($this->uri.'.index');
        return view($this->folder.'.create', $data);
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
    	$tbl = $this->table->find($id);
    	$data['form'] = $formBuilder->create('App\Forms\CitizenForm', [
    		'method' => 'PUT',
    		'model' => $tbl,
    		'url' => route($this->uri.'.update', $id)
    	])
        ->modify('status', 'choice', [
            // 'label' => 'Status',
            // 'attr' => ['required' => ''],
            // 'choices' => [1 => 'YES', 0 => 'NO'],
            // 'choice_options' => [
            //     'wrapper' => ['class' => 'radio'],
            //     'label_attr' => ['class' => 'col-lg-10 col-md-10 col-sm-8 col-xs-7'],
            // ],
            'selected' => null,
            // 'expanded' => true,
            // 'multiple' => false
        ]);

    	$data['url'] = route($this->uri.'.index');
    	return view($this->folder.'.create', $data);
    }
}
