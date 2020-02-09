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

    public function is_died(){
        return $this->pasienMeninggal()->exists();
    }

}
