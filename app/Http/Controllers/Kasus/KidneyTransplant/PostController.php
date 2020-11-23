<?php

namespace App\Http\Controllers\Kasus\KidneyTransplant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use DB;
use Auth;

class PostController extends Controller
{
    public function save(Request $request,$kasus_id)
    {
		DB::beginTransaction();
    	$kasus = Kasus::find($kasus_id);
    	if(empty($kasus))
		{
			return back()			
			->with('message','Case not found')
			->with('status', -1)
			->with('title', 'Error');	
		}

		app('App\Http\Controllers\Kasus\PostController')->savePreData($request,$kasus_id);
		$data_split = app('App\Http\Controllers\Kasus\PostController')->dataSaveSplit($request,$kasus_id);

		DB::commit();
		return redirect('kasus/'.$kasus->jenis_kasus)	
		->with('message','Case Created')
		->with('status', 1)
		->with('title', 'Success');
    }
}
