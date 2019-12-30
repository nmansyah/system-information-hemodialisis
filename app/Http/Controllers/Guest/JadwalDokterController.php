<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Dokter;
use App\Models\Jadwal_Dokter;

class JadwalDokterController extends Controller
{
    public function index()
    {
      $dokter= Dokter::all();
      $jadwal_dokter = Jadwal_Dokter::all();
      return view('guest/jadwalDokter', [
        'dokter' => $dokter,
        'jadwal_dokter' => $jadwal_dokter
      ]);
    }
}
