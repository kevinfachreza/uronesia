<?php

namespace App\Http\Controllers\Pasien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pasien;

class ViewController extends Controller
{
    public function apiGetPasien($id)
    {
    	$px = Pasien::find($id);
    	return json_encode($px);
    }
}
