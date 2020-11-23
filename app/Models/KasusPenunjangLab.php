<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusPenunjangLab extends Model
{
	protected $table = 'kasus_penunjang_lab';

    use SoftDeletes;
}
