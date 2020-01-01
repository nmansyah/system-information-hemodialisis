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

class InputPerpindahJadwalController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      $pasien= Pasien::all();
      return view('admin/inputPerpindahanJadwal', [
        'pasien' => $pasien
      ]);
    }

    public function store(Request $request)
    {
      $pasien = new Pasien;
      $perpindahan_jadwal = new Perpindahan_Jadwal;

      $perpindahan_jadwal->pasien_id = $request->nama;
      $perpindahan_jadwal->tanggal = $request->tanggal;
      $perpindahan_jadwal->hari1 = $request->hari1;
      $perpindahan_jadwal->sesi1 = $request->sesi1;
      $perpindahan_jadwal->save();

      return redirect()
      ->route('data.perpindahanJadwal')
      ->withSuccess('Jadwal Telah Dipindahkan.');
    }

    public function delete($id)
    {
      $perpindahan_jadwal = DB::table('perpindahan_jadwals')->where('id', $id)->delete();
      return redirect()
      ->route('data.perpindahanJadwal')
      ->withSuccess('Jadwal Pasien Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
      $perpindahan_jadwal = DB::table('perpindahan_jadwals')->where('id', $id)->first();
      return view('/admin/editPerpindahanJadwal', ['perpindahan_jadwal' => $perpindahan_jadwal]);
    }

    public function update(Request $request, $id)
    {
        $perpindahan_jadwal = Perpindahan_Jadwal::where('id',$id)->first();
        $perpindahan_jadwal->tanggal = $request->tanggal;
        $perpindahan_jadwal->hari1 = $request->hari1;
        $perpindahan_jadwal->sesi1 = $request->sesi1;
        $perpindahan_jadwal->save();
        return redirect()
        ->route('data.perpindahanJadwal')
        ->with('alert-success','Data berhasil diubah!');
    }
}
