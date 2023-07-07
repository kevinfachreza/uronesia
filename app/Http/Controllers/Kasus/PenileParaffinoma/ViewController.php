<?php

namespace App\Http\Controllers\Kasus\PenileParaffinoma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\PenileParaffinomaExcel;
use Auth;

class ViewController extends Controller
{
     public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','penile-paraffinoma')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Penile Paraffinoma';
		$data['jenis_kasus'] = 'penile-paraffinoma';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();

		return view('kasus.penile-paraffinoma.form',$data);
	}


	public function formView($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien')->first();
		$uriflowmetry = $data['kasus']->uriflowmetry;
		$uri_arr = [];
		foreach($uriflowmetry as $item)
		{
			$uri_arr[$item->bulan_ke] = $item;
		}

		$data['uriflowmetry'] = $uri_arr;
		return view('kasus.penile-paraffinoma.form-view',$data);
	}



	public function print($start,$limit)
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','penile-paraffinoma')->with('pasien','penunjang_radiology')->where('created_by',$user_id)->skip($start)->take($limit)->get();


		$data['kasus'] = $result;

		$data['view'] = 'kasus.penile-paraffinoma.print';
		return (new PenileParaffinomaExcel($data))->download('penile-paraffinoma.xlsx');
	}
}
