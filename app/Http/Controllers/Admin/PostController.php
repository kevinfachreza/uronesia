<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class PostController extends Controller
{
	public function adminStatus($user_id, $status)
	{	
		$user = User::find($user_id);
		$user->admin = $status;
		$user->save();

		if($status == 1) $message = 'User Successfully changed into Admin';
		else $message = 'User Successfully changed into User';

		return back()
		->with('message',$message)
		->with('status', 1)
		->with('title', 'Success');	
	}

	public function activeStatus($user_id, $status)
	{
		$user = User::find($user_id);
		$user->active = $status;
		$user->save();

		if($status == 1) $message = 'User Successfully Activated';
		else $message = 'User Successfully Deactivated';

		return back()
		->with('message',$message)
		->with('status', 1)
		->with('title', 'Success');	
	}
}
