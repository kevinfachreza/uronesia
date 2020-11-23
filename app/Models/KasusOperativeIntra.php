<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusOperativeIntra extends Model
{
	protected $table = 'kasus_operative_intra';

    use SoftDeletes;
}
