<?php

namespace App\Http\Controllers\KasusPenunjang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KasusPenunjang;
use Auth;

class PostController extends Controller
{
    public function create($kasus_id,$jenis,$path)
    {
    	$new = new KasusPenunjang;
    	$new->kasus_id = $kasus_id;
    	$new->jenis = $jenis;
    	$new->path = $path;
    	$new->created_by = Auth::user()->id;
    	$new->save();

    	return $new;
    	
    }
    public function delete($id)
    {
    	$new = KasusPenunjang::find($id);
    	$new->deleted_by = Auth::user()->id;
    	$new->save();
    	$new->delete();

    	return $new;
    	
    }
}
