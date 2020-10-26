<?php

namespace App\Http\Controllers\KasusUriflowmetry;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KasusUriflowmetry;
use Auth;


class PostController extends Controller
{
    public function create($data)
    {
    	$new = new KasusUriflowmetry;
    	$new->kasus_id = $data['kasus_id'];
    	$new->bulan_ke = $data['bulan_ke'];
    	$new->volume = $data['volume'];
    	$new->max_rate = $data['max_rate'];
    	$new->average_rate = $data['average_rate'];
    	$new->voiding_time = $data['voiding_time'];
    	$new->flow_time = $data['flow_time'];
    	$new->time_to_max_flow = $data['time_to_max_flow'];
    	$new->position = $data['position'];
    	$new->weight = $data['weight'];
    	$new->symptomps = $data['symptomps'];
    	$new->advice = $data['advice'];
        $new->residual_urine = $data['residual_urine'];
    	$new->created_by = Auth::user()->id;
    	$new->save();

    	return $new;
    	
    }
    public function deleteDataKasus($kasus_id)
    {
    	$data = KasusUriflowmetry::where('kasus_id',$kasus_id)->get();
    	foreach($data as $item)
    	{
    		$item->deleted_by = Auth::user()->id;
    		$item->save();
    		$item->delete();
    	}

    	return 1;
    	
    }
}
