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
use App\Models\Pasien_Rawatinap;
use Auth;

class DataPasienRawatinapController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('pegawai');
    }

    public function index()
    {
      $pasien = Pasien::all();
      $pasien_rawatinap = Pasien_Rawatinap::all();
      return view('pegawai/dataPasienRawatinap', [
        'pasien' => $pasien, 
        'pasien_rawatinap' => $pasien_rawatinap
      ]);
    }
}
