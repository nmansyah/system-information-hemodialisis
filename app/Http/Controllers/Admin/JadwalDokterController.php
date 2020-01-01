<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Dokter;
use App\Models\Jadwal_Dokter;
use Auth;

class JadwalDokterController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      $dokter= Dokter::all();
      $jadwal_dokter = Jadwal_Dokter::all();
      return view('admin/jadwalDokter', [
        'dokter' => $dokter,
        'jadwal_dokter' => $jadwal_dokter
      ]);
    }
}
