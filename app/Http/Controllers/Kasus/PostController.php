<?php

namespace App\Http\Controllers\Kasus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Kasus;
use DB;
use Auth;

class PostController extends Controller
{

	public function globalSave(Request $request,$kasus_id)
    {
		DB::beginTransaction();
    	$kasus = Kasus::find($kasus_id);
    	if(empty($kasus))
		{
			return back()			
			->with('message','Case not found')
			->with('status', -1)
			->with('title', 'Error');	
		}

		app('App\Http\Controllers\Kasus\PostController')->savePreData($request,$kasus_id);
		$data_split = app('App\Http\Controllers\Kasus\PostController')->dataSaveSplit($request,$kasus_id);

		DB::commit();
		return redirect('kasus/'.$kasus->jenis_kasus)	
		->with('message','Case Created')
		->with('status', 1)
		->with('title', 'Success');
    }

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
		$kasus->created_by = Auth::user()->id;
		$kasus->save();

		DB::commit();
		return redirect('kasus/'.$kasus->jenis_kasus.'/'.$kasus->id.'/form')	
		->with('message','Case Created')
		->with('status', 1)
		->with('title', 'Success');

	}

	public function savePreData(Request $request, $kasus_id)
	{
		$kasus = Kasus::find($kasus_id);
		$kasus->tb = $request->tb;
    	$kasus->bb = $request->bb;
    	$kasus->tanggal_operasi = $request->tanggal_operasi;
    	$kasus->lama_perawatan_hari = $request->lama_perawatan_hari;
    	$kasus->diagnosis = $request->diagnosis;
    	$kasus->komorbid = $request->komorbid;
    	$kasus->is_kasus_baru = $request->is_kasus_baru;
    	$kasus->riwayat_operasi = $request->riwayat_operasi;
    	$kasus->save();
	}

	public function dataSaveSplit(Request $request,$kasus_id)
	{
		$data = $request->all();
		$data_split['anamnesis'] = [];
		$data_split['physical_exam'] = [];
		$data_split['penunjang_lab_pre'] = [];
		$data_split['penunjang_lab_post'] = [];
		$data_split['file'] = [];
		$data_split['pre_operative'] = [];
		$data_split['intra_operative'] = [];
		$data_split['post_operative'] = [];
		$data_split['uroflowmetry'] = [];

		foreach($data as $slug => $item)
		{
			$slugs = explode("__", $slug);
			if(isset($data_split[$slugs[0]]))
			{
				$data_split[$slugs[0]][$slugs[1]] = $item;
			}
		}


		if(count($data_split['anamnesis'])>0){
			$data_split['anamnesis']['kasus_id'] = $kasus_id;
			app('App\Http\Controllers\KasusAnamnesis\PostController')->save($data_split['anamnesis']);
		}
		if(count($data_split['physical_exam'])>0){
			$data_split['physical_exam']['kasus_id'] = $kasus_id;
			app('App\Http\Controllers\KasusPhysicalExam\PostController')->save($data_split['physical_exam']);
		}
		if(count($data_split['penunjang_lab_pre'])>0){
			$data_split['penunjang_lab_pre']['kasus_id'] = $kasus_id;
			$data_split['penunjang_lab_pre']['jenis'] = 'pre';
			app('App\Http\Controllers\KasusPenunjangLab\PostController')->save($data_split['penunjang_lab_pre']);
		}
		if(count($data_split['penunjang_lab_post'])>0){
			$data_split['penunjang_lab_post']['kasus_id'] = $kasus_id;
			$data_split['penunjang_lab_post']['jenis'] = 'post';
			app('App\Http\Controllers\KasusPenunjangLab\PostController')->save($data_split['penunjang_lab_post']);
		}
		if(count($data_split['pre_operative'])>0){
			$data_split['pre_operative']['kasus_id'] = $kasus_id;
			app('App\Http\Controllers\KasusOperativePre\PostController')->save($data_split['pre_operative']);
		}
		if(count($data_split['intra_operative'])>0){
			$data_split['intra_operative']['kasus_id'] = $kasus_id;
			app('App\Http\Controllers\KasusOperativeIntra\PostController')->save($data_split['intra_operative']);
		}
		if(count($data_split['post_operative'])>0){
			$data_split['post_operative']['kasus_id'] = $kasus_id;
			app('App\Http\Controllers\KasusOperativePost\PostController')->save($data_split['post_operative']);
		}
		if(count($data_split['uroflowmetry'])>0){
			$data_split['uroflowmetry']['kasus_id'] = $kasus_id;
			app('App\Http\Controllers\KasusUriflowmetry\PostController')->save($data_split['uroflowmetry']);
		}

		if(!empty($request->kasus_penunjang_delete)){
    		foreach($request->kasus_penunjang_delete as $penunjang_id => $is_delete)
    		{
    			if($is_delete) app('App\Http\Controllers\KasusPenunjang\PostController')->delete($penunjang_id);
    		}
    	}

        if(!empty($request->file_radiology))
        {
            $path = [];
            
        }

        if(count($data_split['file'])>0){
        	foreach($data_split['file'] as $slug => $files)
        	{
        		foreach($files as $file)
        		{
        			$path = app('App\Http\Controllers\Functions\ImageUploader')->upload($file,'kasus-'.$kasus_id);
        			$path = app('App\Http\Controllers\KasusPenunjang\PostController')->create($kasus_id,$slug,$path);
        		}
        	}

        }

	}

	public function getForbiddenColumns()
	{
		return ['id','created_at','updated_at','deleted_at','deleted_by'];
	}
}
