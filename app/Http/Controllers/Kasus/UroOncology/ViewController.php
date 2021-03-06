<?php

namespace App\Http\Controllers\Kasus\UroOncology;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\UrooncologyExcel;
use Auth;

class ViewController extends Controller
{
	public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','urooncology')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Uro-Oncology';
		$data['jenis_kasus'] = 'urooncology';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();

		return view('kasus.urooncology.form',$data);
	}


	public function formView($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang_radiology')->first();
		$uriflowmetry = $data['kasus']->uriflowmetry;
		$uri_arr = [];
		foreach($uriflowmetry as $item)
		{
			$uri_arr[$item->bulan_ke] = $item;
		}

		$data['uriflowmetry'] = $uri_arr;
		return view('kasus.urooncology.form-view',$data);
	}



	public function print()
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','urooncology')->with('pasien','penunjang_radiology','anamnesis')->where('created_by',$user_id)->get();


		$data['kasus'] = $result;

		$data['view'] = 'kasus.urooncology.print';
		return (new UrooncologyExcel($data))->download('Urooncology.xlsx');
	}
}
