<?php

namespace App\Http\Controllers\Kasus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Kasus;
use DB;

class PostController extends Controller
{
	public function create(Request $request)
	{

		DB::beginTransaction();

		if($request->status_pasien == 'baru'){
			$px = new Pasien;
		}
		else
		{
			$px = Pasien::where('id',$request->pasien_id)->first();
		}
		if(empty($px))
		{
			return back()			
			->with('message','Patient Not Found')
			->with('status', -1)
			->with('title', 'Error');	
		}
		$px->no_rm = $request->pasien_no_rm;
		$px->nama = $request->pasien_nama;
		$px->tanggal_lahir = $request->pasien_tanggal_lahir;
		$px->jenis_kelamin = $request->pasien_jenis_kelamin;
		$px->nomor_telpon = $request->pasien_nomor_telpon;
		$px->tb = $request->pasien_tb;
		$px->bb = $request->pasien_bb;
		$px->save();

		$kasus = new Kasus;
		$kasus->pasien_id = $px->id;
		$kasus->jenis_kasus = $request->jenis_kasus;
		$kasus->bb = $px->bb;
		$kasus->tb = $px->tb;
		$kasus->save();

		DB::commit();
		return redirect('kasus/'.$kasus->jenis_kasus.'/'.$kasus->id.'/form')	
		->with('message','Case Created')
		->with('status', 1)
		->with('title', 'Success');

	}
}
