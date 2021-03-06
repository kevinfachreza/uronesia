<?php

namespace App\Http\Controllers\Kasus\CongenitalAbnormalities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\CongenitalAbnormalitiesExcel;
use Auth;

class ViewController extends Controller
{
    public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','congenital-abnormalities')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Congenital Abnormalities';
		$data['jenis_kasus'] = 'congenital-abnormalities';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();

		return view('kasus.congenital-abnormalities.form',$data);
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
		return view('kasus.congenital-abnormalities.form-view',$data);
	}



	public function print()
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','congenital-abnormalities')->with('pasien','penunjang_radiology')->where('created_by',$user_id)->get();


		$data['kasus'] = $result;

		$data['view'] = 'kasus.congenital-abnormalities.print';
		return (new CongenitalAbnormalitiesExcel($data))->download('congenital-abnormalities.xlsx');
	}
}

