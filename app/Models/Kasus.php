<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
	protected $table = 'kasus';

    public function pasien()
    {
        return $this->hasOne('App\Models\Pasien', 'id', 'pasien_id');
    }

    public function penunjang_pre()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','pre-ops');
    }

    public function penunjang_post()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','post-ops');
    }
    public function uriflowmetry()
    {
        return $this->hasMany('App\Models\KasusUriflowmetry', 'kasus_id', 'id')->orderBy('bulan_ke');
    }

    public function creator()
    {
        return $this->hasOne('App\User', 'id', 'created_by');
    }
}
