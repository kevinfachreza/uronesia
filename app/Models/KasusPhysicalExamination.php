<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusPhysicalExamination extends Model
{
	protected $table = 'kasus_physical_examination';

    use SoftDeletes;
}
