<?php

namespace App\Http\Controllers\Kasus\MaleInfertility;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\MaleInfertilityExcel;
use Auth;

class ViewController extends Controller
{
     public function index()
	{
		$user_id = Auth::user()->id;
		$data['kasus'] = Kasus::where('jenis_kasus','male-infertility')->with('pasien','creator')->where('created_by',$user_id)->get();
		$data['title'] = 'Male Infertility';
		$data['jenis_kasus'] = 'male-infertility';
		return view('kasus.layouts.index',$data);
	}


	public function form($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang','anamnesis')->first();

		return view('kasus.male-infertility.form',$data);
	}


	public function formView($kasus_id)
	{
		$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien')->first();
		$uriflowmetry = $data['kasus']->uriflowmetry;
		$uri_arr = [];
		return view('kasus.male-infertility.form-view',$data);
	}



	public function print($start,$limit)
	{
		$user_id = Auth::user()->id;
		$result = Kasus::where('jenis_kasus','male-infertility')->with('pasien','penunjang_radiology')->where('created_by',$user_id)->skip($start)->take($limit)->get();


		$data['kasus'] = $result;

		$data['view'] = 'kasus.male-infertility.print';
		return (new MaleInfertilityExcel($data))->download('male-infertility.xlsx');
	}
}
