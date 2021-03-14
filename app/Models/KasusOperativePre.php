<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KasusOperativePre extends Model
{

	protected $table = 'kasus_operative_pre';

    use SoftDeletes;


    public function recepient_pasien()
    {
        return $this->hasOne('App\Models\Pasien', 'id', 'recepient_pasien_id');
    }
}
