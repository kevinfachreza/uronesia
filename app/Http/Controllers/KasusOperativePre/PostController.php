<?php

namespace App\Http\Controllers\KasusOperativePre;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KasusOperativePre;
use Auth;

class PostController extends Controller
{
	public function save($data)
	{
		$last_data = KasusOperativePre::where('kasus_id',$data['kasus_id'])->first();
		if(!empty($last_data)) $last_data->delete();
		
		$new_data = new KasusOperativePre;
		$table = $new_data->getTable();
		$columns  = \Schema::getColumnListing($table);

		$forbidden_columns = app('App\Http\Controllers\Kasus\PostController')->getForbiddenColumns();

		foreach($columns as $column)
		{
			if(in_array($column, $forbidden_columns)) continue;
			$new_data->$column = $data[$column] ?? null;
		}
		$new_data->created_by = Auth::user()->id;
		$new_data->save();

		return $new_data;

	}
}
