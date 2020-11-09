<?php

namespace App\Http\Controllers\Kasus\Trauma;

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

    	$kasus->history_taking_date = $request->history_taking_date;
        $kasus->trauma_type = $request->trauma_type;
        $kasus->trauma_type_others = $request->trauma_type == 'other' ? $request->trauma_type_others : '';
        $kasus->etiology = $request->etiology;
        $kasus->main_complaint_pain_location = $request->main_complaint_pain_location;
        $kasus->main_complaint_pain_location_others = $request->main_complaint_pain_location == 'other' ? $request->main_complaint_pain_location_others : '';
        $kasus->main_complaint_haematuria = $request->main_complaint_haematuria;
        $kasus->main_complaint_meatal_bleeding = $request->main_complaint_meatal_bleeding;
        $kasus->main_complaint_urinary_retention = $request->main_complaint_urinary_retention;
        $kasus->main_complaint_shock = $request->main_complaint_shock;
        $kasus->physical_examination_gcs = $request->physical_examination_gcs;
        $kasus->physical_examination_shock_history = $request->physical_examination_shock_history;
        $kasus->physical_examination_resusitation_respond = $request->physical_examination_resusitation_respond;
    	$kasus->physical_examination_peritonitis = $request->physical_examination_peritonitis;
    	$kasus->physical_examination_kidney = $request->physical_examination_kidney;
    	$kasus->physical_examination_ureter = $request->physical_examination_ureter;
    	$kasus->physical_examination_bladder = $request->physical_examination_bladder;
    	$kasus->physical_examination_penile = $request->physical_examination_penile;
    	$kasus->physical_examination_urethra = $request->physical_examination_urethra;
    	$kasus->physical_examination_scrotum = $request->physical_examination_scrotum;
    	$kasus->physical_examination_perianal = $request->physical_examination_perianal;
    	$kasus->ops_indication = $request->ops_indication;
    	$kasus->ops_classification = $request->ops_classification;
    	$kasus->ops_surgery_type = $request->ops_surgery_type;
    	$kasus->ops_operator = $request->ops_operator;
    	$kasus->ops_time = $request->ops_time;
    	$kasus->intraops_consult_action = $request->intraops_consult_action;
    	$kasus->intraops_consult_operator = $request->intraops_consult_operator;
    	$kasus->intraops_finding = $request->intraops_finding;
    	$kasus->intraops_bleeding = $request->intraops_bleeding;
    	$kasus->intraops_blood_transfusion = $request->intraops_blood_transfusion;
        $kasus->intraops_surgical_technique = $request->intraops_surgical_technique;
    	$kasus->postops_death = $request->postops_death;
    	$kasus->postops_death_cause = $request->postops_death == 1 ? $request->postops_death_cause : null;
    	$kasus->postops_icu_days = $request->postops_icu_days;
    	$kasus->postops_reoperation = $request->postops_reoperation;
    	$kasus->postops_reoperation_cause = $request->postops_reoperation == 1 ? $request->postops_reoperation_cause : null;
    	$kasus->postops_reoperation_days = $request->postops_reoperation == 1 ? $request->postops_reoperation_days : null;
    	$kasus->created_by = Auth::user()->id;
    	$kasus->save();

    	if(!empty($request->kasus_penunjang_delete)){
    		foreach($request->kasus_penunjang_delete as $penunjang_id => $is_delete)
    		{
    			if($is_delete) app('App\Http\Controllers\KasusPenunjang\PostController')->delete($penunjang_id);
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



		DB::commit();
		return redirect('kasus/'.$kasus->jenis_kasus)	
		->with('message','Case Created')
		->with('status', 1)
		->with('title', 'Success');
    }
}
