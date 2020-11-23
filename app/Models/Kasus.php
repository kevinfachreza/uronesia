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

    public function penunjang()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id');
    }

    public function penunjang_pre()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','pre-ops');
    }

    public function penunjang_post()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','post-ops');
    }

    public function penunjang_intra()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','intra-ops');
    }

    public function penunjang_urethrography()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','urethrography');
    }

    public function penunjang_radiology()
    {
        return $this->hasMany('App\Models\KasusPenunjang', 'kasus_id', 'id')->where('jenis','radiology');
    }

    public function penunjang_lab_pre()
    {
        return $this->hasOne('App\Models\KasusPenunjangLab', 'kasus_id', 'id')->where('jenis','pre');
    }

    public function penunjang_lab_post()
    {
        return $this->hasOne('App\Models\KasusPenunjangLab', 'kasus_id', 'id')->where('jenis','post');
    }

    public function anamnesis()
    {
        return $this->hasOne('App\Models\KasusAnamnesis', 'kasus_id', 'id');
    }

    public function physical_exam()
    {
        return $this->hasOne('App\Models\KasusPhysicalExamination', 'kasus_id', 'id');
    }

    public function operative_intra()
    {
        return $this->hasOne('App\Models\KasusOperativeIntra', 'kasus_id', 'id');
    }

    public function operative_post()
    {
        return $this->hasOne('App\Models\KasusOperativePost', 'kasus_id', 'id');
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
