<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perkembangan_Pasien extends Model
{
    protected $table = 'perkembangan_pasiens';

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
