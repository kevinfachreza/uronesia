<?php

namespace App\Http\Controllers\Kasus\StrikturUretra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use DB;
use Auth;


class PostController extends Controller
{
    public function save(Request $request,$kasus_id)
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

    	$kasus->tb = $request->tb;
    	$kasus->bb = $request->bb;
    	$kasus->tanggal_operasi = $request->tanggal_operasi;
    	$kasus->lama_perawatan_hari = $request->lama_perawatan_hari;
    	$kasus->diagnosis = $request->diagnosis;
    	$kasus->komorbid = $request->komorbid;
    	$kasus->is_kasus_baru = $request->is_kasus_baru;
    	$kasus->riwayat_operasi = $request->riwayat_operasi;
    	$kasus->penunjang_radiologi = $request->penunjang_radiologi;
    	$kasus->penunjang_lab_hb = $request->penunjang_lab_hb;
        $kasus->penunjang_lab_ht = $request->penunjang_lab_ht;
        $kasus->penunjang_lab_l = $request->penunjang_lab_l;
        $kasus->penunjang_lab_tr = $request->penunjang_lab_tr;
        $kasus->penunjang_lab_ur = $request->penunjang_lab_ur;
        $kasus->penunjang_lab_cr = $request->penunjang_lab_cr;
        $kasus->penunjang_lab_bacteria = $request->penunjang_lab_bacteria;
        $kasus->penunjang_lab_sensitive = $request->penunjang_lab_sensitive;
        $kasus->penunjang_lab_resistance = $request->penunjang_lab_resistance;
    	$kasus->ops_operator = $request->ops_operator;
        $kasus->ops_tindakan_dilatation_bougi = $request->ops_tindakan_dilatation_bougi;
        $kasus->ops_tindakan_dilatation_cold_knife = $request->ops_tindakan_dilatation_cold_knife;
        $kasus->ops_tindakan_dilatation_shape = $request->ops_tindakan_dilatation_shape;
        $kasus->ops_tindakan_dilatation_laser = $request->ops_tindakan_dilatation_laser;
        $kasus->ops_tindakan_omental_wrap = $request->ops_tindakan_omental_wrap;
        $kasus->ops_tindakan_non_transecting = $request->ops_tindakan_non_transecting;
        $kasus->ops_tindakan_staged = $request->ops_tindakan_staged;
        $kasus->ops_tindakan_ventral_inlay = $request->ops_tindakan_ventral_inlay;
        $kasus->ops_tindakan_ventral_onlay = $request->ops_tindakan_ventral_onlay;
        $kasus->ops_tindakan_other = $request->ops_tindakan_other;
        $kasus->ops_graft_preputial = $request->ops_graft_preputial;
        $kasus->ops_graft_penlie_skin = $request->ops_graft_penlie_skin;
    	$kasus->ops_tindakan_sachse = $request->ops_tindakan_sachse;
    	$kasus->ops_tindakan_bulbar_mobilisasi = $request->ops_tindakan_bulbar_mobilisasi;
    	$kasus->ops_tindakan_crucal_separasi = $request->ops_tindakan_crucal_separasi;
    	$kasus->ops_tindakan_inferior_pubektomi = $request->ops_tindakan_inferior_pubektomi;
    	$kasus->ops_tindakan_supercrucal_rerouting = $request->ops_tindakan_supercrucal_rerouting;
    	$kasus->ops_tindakan_one_side_dissection = $request->ops_tindakan_one_side_dissection;
    	$kasus->ops_tindakan_johansen = $request->ops_tindakan_johansen;
    	$kasus->ops_tindakan_perineal_urethrostomy = $request->ops_tindakan_perineal_urethrostomy;
    	$kasus->ops_tindakan_double_face = $request->ops_tindakan_double_face;
    	$kasus->ops_tindakan_ventral = $request->ops_tindakan_ventral;
    	$kasus->ops_tindakan_dorsal_onlay = $request->ops_tindakan_dorsal_onlay;
    	$kasus->ops_tindakan_dorsal_inlay = $request->ops_tindakan_dorsal_inlay;
    	$kasus->ops_graft_cheek = $request->ops_graft_cheek;
    	$kasus->ops_tindakan_asopa = $request->ops_tindakan_asopa;
    	$kasus->ops_graft_upper_lip = $request->ops_graft_upper_lip;
    	$kasus->ops_graft_lower_lip = $request->ops_graft_lower_lip;
    	$kasus->ops_graft_lingual = $request->ops_graft_lingual;
    	$kasus->ops_graft_gracilis = $request->ops_graft_gracilis;
        $kasus->ops_graft_garcilis_other = $request->ops_graft_garcilis_other;
    	$kasus->ops_striktur_lokasi = $request->ops_striktur_lokasi;
    	$kasus->ops_striktur_panjang = $request->ops_striktur_panjang;
    	$kasus->ops_striktur_penyebab = $request->ops_striktur_penyebab;
    	$kasus->ops_skor_ereksi_pre_ops = $request->ops_skor_ereksi_pre_ops;
    	$kasus->ops_skor_ereksi_post_ops = $request->ops_skor_ereksi_post_ops;
    	$kasus->ops_post_chordee = $request->ops_post_chordee;
    	$kasus->ops_panjang_penis_pre_ops = $request->ops_panjang_penis_pre_ops;
    	$kasus->ops_panjang_penis_post_ops = $request->ops_panjang_penis_post_ops;
    	$kasus->ops_perikateter_urethrografi = $request->ops_perikateter_urethrografi;
    	$kasus->created_by = Auth::user()->id;
    	$kasus->save();

    	if(!empty($request->kasus_penunjang_delete)){
    		foreach($request->kasus_penunjang_delete as $penunjang_id => $is_delete)
    		{
    			if($is_delete) app('App\Http\Controllers\KasusPenunjang\PostController')->delete($penunjang_id);
    		}
    	}

    	if(!empty($request->file_pre))
    	{
    		$path = [];
    		foreach($request->file_pre as $file)
    		{
    			$path = app('App\Http\Controllers\Functions\ImageUploader')->upload($file,'kasus-'.$kasus_id);
    			$path = app('App\Http\Controllers\KasusPenunjang\PostController')->create($kasus_id,'pre-ops',$path);
    		}
    	}

    	if(!empty($request->file_post))
    	{
    		$path = [];
    		foreach($request->file_post as $file)
    		{
    			$path = app('App\Http\Controllers\Functions\ImageUploader')->upload($file,'kasus-'.$kasus_id);
    			$path = app('App\Http\Controllers\KasusPenunjang\PostController')->create($kasus_id,'post-ops',$path);
    		}
    	}

        if(!empty($request->file_intra))
        {
            $path = [];
            foreach($request->file_intra as $file)
            {
                $path = app('App\Http\Controllers\Functions\ImageUploader')->upload($file,'kasus-'.$kasus_id);
                $path = app('App\Http\Controllers\KasusPenunjang\PostController')->create($kasus_id,'intra-ops',$path);
            }
        }

        if(!empty($request->file_urethrography))
        {
            $path = [];
            foreach($request->file_urethrography as $file)
            {
                $path = app('App\Http\Controllers\Functions\ImageUploader')->upload($file,'kasus-'.$kasus_id);
                $path = app('App\Http\Controllers\KasusPenunjang\PostController')->create($kasus_id,'urethrography',$path);
            }
        }

        if(!empty($request->file_radiology))
        {
            $path = [];
            foreach($request->file_radiology as $file)
            {
                $path = app('App\Http\Controllers\Functions\ImageUploader')->upload($file,'kasus-'.$kasus_id);
                $path = app('App\Http\Controllers\KasusPenunjang\PostController')->create($kasus_id,'radiology',$path);
            }
        }



    	$uriflowmetry_bulan = [1,3,6,9,12,24,60];

		app('App\Http\Controllers\KasusUriflowmetry\PostController')->deleteDataKasus($kasus_id);

    	foreach($uriflowmetry_bulan as $bulan)
    	{
    		$data = [];
    		$data['kasus_id'] = $kasus_id;
    		$data['volume'] = $request->uriflowmetry_volume[$bulan];
    		$data['bulan_ke'] = $bulan;
    		$data['max_rate'] = $request->uriflowmetry_max_rate[$bulan];
    		$data['average_rate'] = $request->uriflowmetry_average_rate[$bulan];
    		$data['voiding_time'] = $request->uriflowmetry_voiding_time[$bulan];
    		$data['flow_time'] = $request->uriflowmetry_flow_time[$bulan];
    		$data['time_to_max_flow'] = $request->uriflowmetry_time_to_max_flow[$bulan];
    		$data['position'] = $request->uriflowmetry_position[$bulan];
    		$data['weight'] = $request->uriflowmetry_weight[$bulan];
    		$data['symptomps'] = $request->uriflowmetry_symptomps[$bulan];
    		$data['advice'] = $request->uriflowmetry_advice[$bulan];
            $data['residual_urine'] = $request->uriflowmetry_residual_urine[$bulan];

    		$uriflow = app('App\Http\Controllers\KasusUriflowmetry\PostController')->create($data);
    	}



		DB::commit();
		return redirect('kasus/'.$kasus->jenis_kasus)	
		->with('message','Case Created')
		->with('status', 1)
		->with('title', 'Success');
    }
}
