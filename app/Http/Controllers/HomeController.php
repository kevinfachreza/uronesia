<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasus;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $data['count_kasus_self'] = Kasus::where('created_by',$user_id)->count();
        $data['count_kasus_striktur_uretra'] = Kasus::where('jenis_kasus','striktur-uretra')->where('created_by',$user_id)->count();
        $data['count_kasus_trauma'] = Kasus::where('jenis_kasus','trauma')->where('created_by',$user_id)->count();
        $data['count_kasus_urooncology'] = Kasus::where('jenis_kasus','urooncology')->where('created_by',$user_id)->count();
        $data['count_kasus_benign_prostate_hiperplasia'] = Kasus::where('jenis_kasus','benign-prostate-hiperplasia')->where('created_by',$user_id)->count();

        



        return view('home',$data);
    }
}
