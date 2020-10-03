<?php

namespace App\Http\Controllers\Kasus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;

class ViewController extends Controller
{
	public function create(Request $request)
	{
		$data['jenis'] = $request->jenis;
		$data['jenis_display'] = str_replace("-", ' ', $request->jenis);
		$data['pasien'] = Pasien::all();
		return view('kasus.create',$data);
	}
}
