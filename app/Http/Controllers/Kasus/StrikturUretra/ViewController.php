<?php

namespace App\Http\Controllers\Kasus\StrikturUretra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;

class ViewController extends Controller
{
    public function index()
    {
        $data['kasus'] = Kasus::where('jenis_kasus','striktur-uretra')->with('pasien','penunjang_pre','penunjang_post','uriflowmetry')->get();
    	return view('kasus.striktur-uretra.index',$data);
    }
    public function form($kasus_id)
    {
    	$data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang_pre','penunjang_post')->first();
        $uriflowmetry = $data['kasus']->uriflowmetry;
        $uri_arr = [];
        foreach($uriflowmetry as $item)
        {
            $uri_arr[$item->bulan_ke] = $item;
        }

        $data['uriflowmetry'] = $uri_arr;
    	return view('kasus.striktur-uretra.form',$data);
    }
}
