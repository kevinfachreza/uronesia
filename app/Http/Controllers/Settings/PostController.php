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
		->with('message','Data berhasil diperbarui')
		->with('status', 1)
		->with('title', 'Berhasil');

	}

	public function password(Request $request)
	{
		$user = User::find(Auth::user()->id);
		$check = Hash::check($request->password_current, $user->password);

		if(!Hash::check($request->password_current, $user->password)){
    		$status = -1;
    		$message = 'Password yang anda masukkan tidak sama dengan password saat ini';
    		$title = 'Gagal!';
    	}
    	elseif (strcmp($request->password_current, $request->password_new) == 0) {
    		$status = -1;
    		$message = 'Password baru tidak boleh sama dengan password sebelumnya';
    		$title = 'Gagal!';
    	}
    	elseif (strcmp($request->password_new, $request->password_new_confirmation) != 0) {
    		$status = -1;
    		$message = 'Pastikan password yang anda masukkan pada kolom Password Baru dan Verifikasi Password Baru sama';
    		$title = 'Gagal!';
    	}
    	else{
    		$user->password = bcrypt($request->password_new);
    		$user->save();
    		
    		$status = 1;
    		$message = 'Password berhasil diubah!';
    		$title = 'Sukses!';

    	}

    	return back()
		->with('message', $message)
		->with('title', $title)
		->with('status', $status);

	}
}
