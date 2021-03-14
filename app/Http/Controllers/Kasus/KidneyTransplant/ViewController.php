<?php

namespace App\Http\Controllers\Kasus\KidneyTransplant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\KidneyTransplantExcel;
use App\Models\Pasien;
use Auth;

class ViewController extends Controller
{
    public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','kidney-transplant')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Kidney Transplant';
		$data['jenis_kasus'] = 'kidney-transplant';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();
		$data['pasien'] = Pasien::all();
		return view('kasus.kidney-transplant.form',$data);
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
		return view('kasus.kidney-transplant.form-view',$data);
	}



	public function print()
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','kidney-transplant')->with('pasien','penunjang_radiology')->where('created_by',$user_id)->get();


		$data['kasus'] = $result;

		$data['view'] = 'kasus.kidney-transplant.print';
		return (new KidneyTransplantExcel($data))->download('KidneyTransplant.xlsx');
	}
}
