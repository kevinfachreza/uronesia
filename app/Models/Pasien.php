<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pasien extends Model
{
	protected $table = 'pasien';

	public function getAgeAttribute() {
        $dt = new Carbon($this->tanggal_lahir);
        $created_at = Carbon::now();
        $diff = $dt->diff($created_at);
        $day = $diff->format('%d');
        $month = $diff->format('%m');
        $year = $diff->format('%y');
        if($year == 0 && $month == 0)
        {
            $date = new Carbon($this->tanggal_lahir);
            return $date->diff($created_at)->format('%d Days Old');
        }
        elseif($year == 0)
        {
            $date = new Carbon($this->tanggal_lahir);
            return $date->diff($created_at)->format('%m Months Old');
        }
        else
        {
            $date = new Carbon($this->tanggal_lahir);
            return $date->diff($created_at)->format('%y Years Old');
        }
    }
}
