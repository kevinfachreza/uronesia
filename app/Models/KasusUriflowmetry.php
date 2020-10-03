<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusUriflowmetry extends Model
{
	protected $table = 'kasus_uriflowmetry';

    use SoftDeletes;
}
