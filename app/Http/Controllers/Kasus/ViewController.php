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
		if($data['jenis'] == 'striktur-uretra') $jenis_display = 'Urethral Stricture';
		elseif($data['jenis'] == 'trauma') $jenis_display = 'Trauma';
		elseif($data['jenis'] == 'urooncology') $jenis_display = 'Uro-Oncology';
		elseif($data['jenis'] == 'benign-prostate-hiperplasia') $jenis_display = 'Benign Prostate Hiperplasia';
		elseif($data['jenis'] == 'kidney-transplant') $jenis_display = 'Kidney Transplant';
		elseif($data['jenis'] == 'laparoscopic') $jenis_display = 'Laparoscopic';
		elseif($data['jenis'] == 'additional') $jenis_display = 'Additional';
		elseif($data['jenis'] == 'congenital-abnormalities') $jenis_display = 'Congenital Abnormalities';
		else abort(404);
		$data['jenis_display'] = str_replace("-", ' ', $jenis_display);
		$data['pasien'] = Pasien::all();
		return view('kasus.create',$data);
	}
}
