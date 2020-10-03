<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ViewController extends Controller
{
    public function index()
    {
    	$data['user'] = Auth::user();
    	return view('settings.index',$data);
    }
}
