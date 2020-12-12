<?php

namespace App\Http\Controllers\Kasus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Kasus;
use Auth;

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
		elseif($data['jenis'] == 'stone') $jenis_display = 'Stone';
		elseif($data['jenis'] == 'male-infertility') $jenis_display = 'Male Infertility';
		elseif($data['jenis'] == 'penile-paraffinoma') $jenis_display = 'Penile Paraffinoma';
		elseif($data['jenis'] == 'uroginecology') $jenis_display = 'Uroginecology';
		else abort(404);
		$data['jenis_display'] = str_replace("-", ' ', $jenis_display);
		$data['pasien'] = Pasien::all();
		return view('kasus.create',$data);
	}

	public function kasusSingle(Request $request)
	{

		$user_id = Auth::user()->id;
		$data['jenis'] = $request->jenis_kasus;
		if($data['jenis'] == 'striktur-uretra') $jenis_display = 'Urethral Stricture';
		elseif($data['jenis'] == 'trauma') $jenis_display = 'Trauma';
		elseif($data['jenis'] == 'urooncology') $jenis_display = 'Uro-Oncology';
		elseif($data['jenis'] == 'benign-prostate-hiperplasia') $jenis_display = 'Benign Prostate Hiperplasia';
		elseif($data['jenis'] == 'kidney-transplant') $jenis_display = 'Kidney Transplant';
		elseif($data['jenis'] == 'laparoscopic') $jenis_display = 'Laparoscopic';
		elseif($data['jenis'] == 'additional') $jenis_display = 'Additional';
		elseif($data['jenis'] == 'congenital-abnormalities') $jenis_display = 'Congenital Abnormalities';
		elseif($data['jenis'] == 'stone') $jenis_display = 'Stone';
		elseif($data['jenis'] == 'male-infertility') $jenis_display = 'Male Infertility';
		elseif($data['jenis'] == 'penile-paraffinoma') $jenis_display = 'Penile Paraffinoma';
		elseif($data['jenis'] == 'uroginecology') $jenis_display = 'Uroginecology';
		else abort(404);

		$coming_soon = ['congenital-abnormalities','stone','male-infertility','urogenital-trauma','uroginecology'];
		$data['title'] = str_replace("-", ' ', $jenis_display);
		$data['jenis_kasus'] = $data['jenis'];
		$data['coming_soon'] = in_array($data['jenis_kasus'], $coming_soon);
		$data['kasus'] = Kasus::where('jenis_kasus',$data['jenis'])->with('pasien','creator')->where('created_by',$user_id)->get();
		
		return view('kasus.single-global',$data);
	}
}
