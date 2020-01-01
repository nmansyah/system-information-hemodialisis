<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien;
use App\Models\Pasien_Travel;
use Auth;

class DataPasienTravelingController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('pegawai');
    }

    public function index()
    {
      $pasien = Pasien::all();
      $pasien_traveling = Pasien_Travel::all();
      return view('pegawai/dataPasienTraveling', [
        'pasien' => $pasien, 
        'pasien_traveling' => $pasien_traveling
      ]);
    }
}
