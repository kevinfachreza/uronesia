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
    	$new->kasus_id = $data['kasus_id'] ?? null;
    	$new->bulan_ke = $data['bulan_ke'] ?? null;
    	$new->volume = $data['volume'] ?? null;
    	$new->max_rate = $data['max_rate'] ?? null;
    	$new->average_rate = $data['average_rate'] ?? null;
    	$new->voiding_time = $data['voiding_time'] ?? null;
    	$new->flow_time = $data['flow_time'] ?? null;
    	$new->time_to_max_flow = $data['time_to_max_flow'] ?? null;
    	$new->position = $data['position'] ?? null;
    	$new->weight = $data['weight'] ?? null;
    	$new->symptomps = $data['symptomps'] ?? null;
    	$new->advice = $data['advice'] ?? null;
        $new->residual_urine = $data['residual_urine'] ?? null;
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

    public function save($data)
    {
        $this->deleteDataKasus($data['kasus_id']);

        $data_submit = [];

        foreach($data as $parameter => $slugs)
        {
            if($parameter != 'kasus_id')
            {
                foreach($slugs as $slug => $item)
                {
                    $data_submit[$slug][$parameter] = $item;
                }
            }
        }

        foreach($data_submit as $slug=>$item)
        {
            $data_submit[$slug]['kasus_id'] = $data['kasus_id'];
            $data_submit[$slug]['bulan_ke'] = $slug;
        }

        foreach($data_submit as $slug=>$item)
        {
            $this->create($item);
        }

        return 1;
    }
}
