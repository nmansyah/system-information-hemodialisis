<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Perawat;
use App\Models\Jadwal_Perawat;

class JadwalPerawatController extends Controller
{
    public function index()
    {
        $perawat= Perawat::all();
        $jadwal_perawat = Jadwal_Perawat::all();
        return view('guest/jadwalPerawat', [
            'perawat' => $perawat,
            'jadwal_perawat' => $jadwal_perawat
        ]);
    }
}
