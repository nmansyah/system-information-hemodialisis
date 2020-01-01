<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pasien;
use App\Models\Perpindahan_Jadwal;
use Auth;

class DataPerpindahJadwalController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      $pasien = Pasien::all();
      $perpindahan_jadwal = Perpindahan_Jadwal::all();
      return view('admin/dataPerpindahJadwal', [
        'pasien' => $pasien, 
        'perpindahan_jadwal' => $perpindahan_jadwal
      ]);
    }
}
