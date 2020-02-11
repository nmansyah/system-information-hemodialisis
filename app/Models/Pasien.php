<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';

    public function askeps(){
        return $this->hasMany(
            Askep::class,
            'pasien_id'
        );
    }

    public function pasienMeninggal(){
        return $this->hasOne(Pasien_Meninggal::class, 'pasien_id');
    }

    public function pasienRawatInap(){
        return $this->hasOne(Pasien_Rawatinap::class, 'pasien_id');
    }

    public function isInpatient(){
        if ($this->pasienRawatInap()->exists()){
            if (is_null($this->pasienRawatInap['check_out_time'])){
                return true;
            }
        }
        return false;
    }

    public function is_died(){
        return $this->pasienMeninggal()->exists();
    }

}
