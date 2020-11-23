<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusOperativePost extends Model
{
	protected $table = 'kasus_operative_post';

    use SoftDeletes;
}
