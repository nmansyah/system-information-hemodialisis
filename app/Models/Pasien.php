<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';

    public function askeps()
    {
        return $this->hasMany(
            Askep::class,
            'pasien_id'
        );
    }

    public function pasienTraveling()
    {
        return $this->hasOne(PasienTraveling::class, 'pasien_id');
    }

    public function isInpatient()
    {
        if ($this->pasienRawatInap()->exists()) {
            if (is_null($this->pasienRawatInap['check_out_time'])) {
                return true;
            }
        }
        return false;
    }

    public function pasienRawatInap()
    {
        return $this->hasOne(Pasien_Rawatinap::class, 'pasien_id');
    }

    public function isIntraveling()
    {
        if ($this->pasienTravelSementaras()->exists()) {
            foreach ($this->pasienTravelSementaras as $pts) {
                if ($pts->is_active) {
                    return true;
                }
            }
        }
        return false;
    }

    public function pasienTravelSementaras()
    {
        return $this->hasMany(PasienTravelSementara::class, 'pasien_id');
    }

    public function is_died()
    {
        return $this->pasienMeninggal()->exists();
    }

    public function pasienMeninggal()
    {
        return $this->hasOne(Pasien_Meninggal::class, 'pasien_id');
    }

}
