<?php

namespace App\Http\Controllers\Kasus\BenignProstateHiperplasia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\BenignProstateHiperplasiaExcel;
use Auth;

class ViewController extends Controller
{
    public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','benign-prostate-hiperplasia')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Benign Prostate Hiperplasia';
		$data['jenis_kasus'] = 'benign-prostate-hiperplasia';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();

        $uriflowmetry = $data['kasus']->uriflowmetry;
        $uri_arr = [];
        foreach($uriflowmetry as $item)
        {
            $uri_arr[$item->bulan_ke] = $item;
        }

        $data['uriflowmetry'] = $uri_arr;

		return view('kasus.benign-prostate-hiperplasia.form',$data);
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
		return view('kasus.benign-prostate-hiperplasia.form-view',$data);
	}
	public function print($start,$limit)
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','benign-prostate-hiperplasia')->with('pasien','penunjang_radiology')->where('created_by',$user_id)->get();

		$data['kasus'] = $result;

		foreach($data['kasus'] as $kasus)
		{
	        $uriflowmetry = $kasus->uriflowmetry;
	        $uri_arr = [];
	        foreach($uriflowmetry as $item)
	        {
	            $uri_arr[$item->bulan_ke] = $item;
	        }

	        $kasus->uriflowmetry_arr = $uri_arr;
		}

		$data['view'] = 'kasus.benign-prostate-hiperplasia.print';
		return (new BenignProstateHiperplasiaExcel($data))->download('BenignProstateHiperplasia.xlsx');
	}
}
