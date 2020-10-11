<?php

namespace App\Http\Controllers\Kasus\StrikturUretra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\StrikturUretraExcel;

class ViewController extends Controller
{
    public function index()
    {
        $data['kasus'] = Kasus::where('jenis_kasus','striktur-uretra')->with('pasien','penunjang_pre','penunjang_post','uriflowmetry','creator')->get();
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


    public function formView($kasus_id)
    {
        $data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang_pre','penunjang_post')->first();
        $uriflowmetry = $data['kasus']->uriflowmetry;
        $uri_arr = [];
        foreach($uriflowmetry as $item)
        {
            $uri_arr[$item->bulan_ke] = $item;
        }

        $data['uriflowmetry'] = $uri_arr;
        return view('kasus.striktur-uretra.form-view',$data);
    }



    public function print()
    {
        $result = Kasus::where('jenis_kasus','striktur-uretra')->with('pasien','penunjang_pre','penunjang_post','uriflowmetry')->get();


        $data['kasus'] = $result;

        $data['view'] = 'kasus.striktur-uretra.print';
        return (new StrikturUretraExcel($data))->download('StrikturUretra.xlsx');
    }
}
