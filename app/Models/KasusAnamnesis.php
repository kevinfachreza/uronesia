<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusAnamnesis extends Model
{
	protected $table = 'kasus_anamnesis';

    use SoftDeletes;
}
