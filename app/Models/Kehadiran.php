<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = 'kehadirans';

    public function pasien(){
        return $this->belongsTo(Pasien::class);
    }
}
