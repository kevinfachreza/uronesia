<?php

namespace App\Http\Controllers\Kasus\StrikturUretra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kasus;
use App\Exports\StrikturUretraExcel;
use Auth;

class ViewController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $data['kasus'] = Kasus::where('jenis_kasus','striktur-uretra')->with('pasien','penunjang_pre','penunjang_post','penunjang_intra','penunjang_urethrography','uriflowmetry','creator')->where('created_by',$user_id)->get();
        $data['title'] = 'Urethral Stricture';
        $data['jenis_kasus'] = 'striktur-uretra';
    	return view('kasus.layouts.index',$data);
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
        $data['kasus'] = Kasus::where('id',$kasus_id)->with('pasien','penunjang_pre','penunjang_post','penunjang_intra','penunjang_urethrography','uriflowmetry')->first();
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
        $user_id = Auth::user()->id;
        $result = Kasus::where('jenis_kasus','striktur-uretra')->with('pasien','penunjang_pre','penunjang_post','uriflowmetry')->where('created_by',$user_id)->get();


        $data['kasus'] = $result;

        $data['view'] = 'kasus.striktur-uretra.print';
        return (new StrikturUretraExcel($data))->download('StrikturUretra.xlsx');
    }
}
