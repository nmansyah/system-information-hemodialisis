<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Perawat;
use App\Models\Jadwal_Perawat;
use Auth;

class InputJadwalPerawatController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function show()
    {
      $perawat= Perawat::all();
      $jadwal_perawat = Jadwal_Perawat::all();
      return view('admin/jadwalPerawat', [
        'perawat' => $perawat,
        'jadwal_perawat' => $jadwal_perawat
      ]);
    }

  public function index()
  {
    $perawat= Perawat::all();
    $jadwal_perawat = Jadwal_Perawat::all();
    return view('admin/inputJadwalPerawat', [
      'perawat' => $perawat,
      'jadwal_perawat' => $jadwal_perawat
    ]);
  }

  public function store(Request $request)
  {
    $perawat = new Perawat;
    $jadwal_perawat = new Jadwal_Perawat;

    $jadwal_perawat->bulan = $request->bulan;
    $jadwal_perawat->perawat_id = $request->nama;
    $jadwal_perawat->hari1 = $request->hari1;
    $jadwal_perawat->hari2 = $request->hari2;
    $jadwal_perawat->hari3 = $request->hari3;
    $jadwal_perawat->hari4 = $request->hari4;
    $jadwal_perawat->hari5 = $request->hari5;
    $jadwal_perawat->hari6 = $request->hari6;

    $jadwal_perawat->save();

    return redirect()
    ->route('admin.data.jadwalPerawat')
    ->withSuccess('Jadwal Telah Ditambahkan.');
  }

  public function delete($id)
  {
      $jadwal_perawat = DB::table('jadwal_perawats')->where('id', $id)->delete();
      return redirect()
      ->route('admin.data.jadwalPerawat')
      ->withSuccess('Jadwal Perawat Berhasil Dihapuskan.');
  }
  public function edit($id)
  {
    $jadwal_perawat = DB::table('jadwal_perawats')->where('id', $id)->first();
    return view('/admin/editJadwalPerawat', ['jadwal_perawat' => $jadwal_perawat]);
  }

  public function update(Request $request, $id)
  {
      $jadwal_perawat = Jadwal_Perawat::where('id',$id)->first();
      $jadwal_perawat ->bulan = $request->bulan;
      $jadwal_perawat ->hari1 = $request->hari1;
      $jadwal_perawat ->hari2 = $request->hari2;
      $jadwal_perawat ->hari3 = $request->hari3;
      $jadwal_perawat ->hari4 = $request->hari4;
      $jadwal_perawat ->hari5 = $request->hari5;
      $jadwal_perawat ->hari6 = $request->hari6;
      $jadwal_perawat ->save();
      return redirect()
      ->route('admin.data.jadwalPerawat')
      ->with('alert-success','Data berhasil diubah!');
  }
}
