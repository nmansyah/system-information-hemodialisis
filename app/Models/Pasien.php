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

}
