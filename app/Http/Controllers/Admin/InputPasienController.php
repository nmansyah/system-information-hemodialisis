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
use Auth;

class InputPasienController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('admin/inputPasien');
    }

    public function store(Request $request)
    {

      $pasien = new Pasien;

      $pasien->no_cm = $request->no_cm;
      $pasien->nama = $request->nama;
      $pasien->jenis_kelamin = $request->jenis_kelamin;
      $pasien->alamat = $request->alamat;
      $pasien->no_hp = $request->no_hp;
      $pasien->usia = $request->usia;
      $pasien->riwayat = $request->riwayat;
      $pasien->asuransi = $request->asuransi;
      $pasien->hari1 = $request->hari1;
      $pasien->sesi1 = $request->sesi1;
      $pasien->hari2 = $request->hari2;
      $pasien->sesi2 = $request->sesi2;
      $pasien->save();

      return redirect()
      ->route('data.pasien')
      ->withSuccess('Pasien Telah Ditambahkan.');
    }

    public function delete($id)
    {
      $pasien = DB::table('pasiens')->where('id', $id)->delete();
      return redirect()
      ->route('data.pasien')
      ->withSuccess('Dokter Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
      $pasien = DB::table('pasiens')->where('id', $id)->first();
      return view('/admin/editPasien', ['pasien' => $pasien]);
    }

    public function update(Request $request, $id)
    {
        $pasien = Pasien::where('id',$id)->first();
        $pasien->no_cm = $request->no_cm;
        $pasien->nama = $request->nama;
        $pasien->usia = $request->usia;
        $pasien->alamat = $request->alamat;
        $pasien->asuransi = $request->asuransi;
        $pasien->riwayat = $request->riwayat;
        $pasien->no_hp = $request->no_hp;
        $pasien->hari1 = $request->hari1;
        $pasien->sesi1 = $request->sesi1;
        $pasien->hari2 = $request->hari2;
        $pasien->sesi2 = $request->sesi2;
        $pasien->save();
        return redirect()
        ->route('data.pasien')
        ->with('alert-success','Data berhasil diubah!');
    }
}
