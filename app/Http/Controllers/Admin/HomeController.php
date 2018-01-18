<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Citizens;

class HomeController extends Controller
{
    private $folder = 'admin.home';
    private $title = 'Dashboard';

    public function index(Citizens $user)
    {
    	$data['total'] = $user->count();
    	$data['male'] = $user->where('sex_id', 1)->count();
    	$data['female'] = $user->where('sex_id', 2)->count();
    	$data['leader'] = $user->where('family_status_id', 1)->count();
    	$data['page_title'] = $this->title;
    	return view($this->folder.'.index', $data);
    }

}
