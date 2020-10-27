<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ViewController extends Controller
{
    public function index()
    {
    	$data['users'] = User::all();
    	return view('admin.index',$data);
    }
}
