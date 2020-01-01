<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kehadiran_Pasien;
use Auth;


class InputKehadiranPasienController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      return view('admin/inputKehadiranPasien');
      
    } 

    public function store(Request $request)
    {
      $kehadiran_pasien = new Kehadiran_Pasien;
      
      $kehadiran_pasien->bulan = $request->bulan;
      $kehadiran_pasien->hadir = $request->hadir;
      $kehadiran_pasien->tdk_hadir = $request->tdk_hadir;
      $kehadiran_pasien->save();

      

      return redirect()
      ->route('data.kehadiranPasien')
      ->withSuccess('Presensi Telah Ditambahkan.');
    }

    public function delete($id)
    {
      $kehadiran_pasien = DB::table('kehadiran_pasiens')->where('id', $id)->delete();
      return redirect()
      ->route('data.kehadiranPasien')
      ->withSuccess('Kehadiran Pasien Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
      $kehadiran_pasien = DB::table('kehadiran_pasiens')->where('id', $id)->first();
      return view('/admin/editKehadiranPasien', ['kehadiran_pasien' => $kehadiran_pasien]);
    }

    public function update(Request $request, $id)
    {
        $kehadiran_pasien = Kehadiran_Pasien::where('id',$id)->first();
        $kehadiran_pasien->bulan = $request->bulan;
        $kehadiran_pasien->hadir = $request->hadir;
        $kehadiran_pasien->tdk_hadir = $request->tdk_hadir;
        $kehadiran_pasien->save();
        return redirect()
        ->route('data.kehadiranPasien')
        ->with('alert-success','Data berhasil diubah!');
    }
}

