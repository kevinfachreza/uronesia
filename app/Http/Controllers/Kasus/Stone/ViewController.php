<?php

namespace App\Http\Controllers\Kasus\Stone;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\StoneExcel;
use Auth;

class ViewController extends Controller
{
    public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','stone')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Stone';
		$data['jenis_kasus'] = 'stone';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();

		return view('kasus.stone.form',$data);
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
		return view('kasus.stone.form-view',$data);
	}



	public function print()
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','stone')->with('pasien','penunjang_radiology')->where('created_by',$user_id)->get();


		$data['kasus'] = $result;

		$data['view'] = 'kasus.stone.print';
		return (new StoneExcel($data))->download('Stone.xlsx');
	}
}
