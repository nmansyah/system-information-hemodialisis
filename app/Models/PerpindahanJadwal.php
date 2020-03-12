<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerpindahanJadwal extends Model
{
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
