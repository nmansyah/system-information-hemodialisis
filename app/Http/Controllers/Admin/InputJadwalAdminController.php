<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Jadwal_Admin;
use Auth;

class InputJadwalAdminController extends Controller
{
    public function index()
    {
      return view('admin/inputJadwalAdmin');
    }

    public function store(Request $request)
    {
      $jadwalAdmin = new Jadwal_Admin;

      $jadwalAdmin->bulan = $request->bulan;
      $jadwalAdmin->minggu = $request->minggu;
      $jadwalAdmin->nama = $request->nama;
      $jadwalAdmin->hari1 = $request->hari1;
      $jadwalAdmin->hari2 = $request->hari2;
      $jadwalAdmin->hari3 = $request->hari3;
      $jadwalAdmin->hari4 = $request->hari4;
      $jadwalAdmin->hari5 = $request->hari5;
      $jadwalAdmin->hari6 = $request->hari6;
      $jadwalAdmin->save();

      return redirect()
      ->route('data.jadwalAdmin')
      ->withSuccess('Jadwal Telah Ditambahkan.');
    }
}
