<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;

class PostController extends Controller
{
	public function edit(Request $request)
	{
		$user = User::find(Auth::user()->id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->save();

		return back()
		->with('message','Data successfully updated')
		->with('status', 1)
		->with('title', 'Success');

	}

	public function password(Request $request)
	{
		$user = User::find(Auth::user()->id);
		$check = Hash::check($request->password_current, $user->password);

		if(!Hash::check($request->password_current, $user->password)){
    		$status = -1;
    		$message = 'Password does not match with your current password';
    		$title = 'Error!';
    	}
    	elseif (strcmp($request->password_current, $request->password_new) == 0) {
    		$status = -1;
    		$message = 'New password is same with old password';
    		$title = 'Error!';
    	}
    	elseif (strcmp($request->password_new, $request->password_new_confirmation) != 0) {
    		$status = -1;
    		$message = 'Password confirmation does not match';
    		$title = 'Error!';
    	}
    	else{
    		$user->password = bcrypt($request->password_new);
    		$user->save();
    		
    		$status = 1;
    		$message = 'Password successfully changed';
    		$title = 'Success!';

    	}

    	return back()
		->with('message', $message)
		->with('title', $title)
		->with('status', $status);

	}
}
