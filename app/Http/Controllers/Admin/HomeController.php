<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    private $folder = 'admin.home';
    private $title = 'Dashboard';

    public function index()
    {
    	return view($this->folder.'.index');
    }
}
