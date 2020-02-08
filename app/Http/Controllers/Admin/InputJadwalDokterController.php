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

class InputJadwalDokterController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function show()
    {
      $dokter= Dokter::all();
      $jadwal_dokter = Jadwal_Dokter::all();
      return view('admin/jadwalDokter', [
        'dokter' => $dokter,
        'jadwal_dokter' => $jadwal_dokter
      ]);
    }

    public function index()
    {
      $dokter= Dokter::all();
      $jadwal_dokter = Jadwal_Dokter::all();
      return view('admin/inputJadwalDokter', [
        'dokter' => $dokter,
        'jadwal_dokter' => $jadwal_dokter
      ]);
    }
    public function store(Request $request)
  {
    $dokter = new Dokter;
    $jadwal_dokter = new Jadwal_Dokter;

    $jadwal_dokter->bulan = $request->bulan;
    $jadwal_dokter->dokter_id = $request->nama;
    $jadwal_dokter->hari1 = $request->hari1;
    $jadwal_dokter->hari2 = $request->hari2;
    $jadwal_dokter->hari3 = $request->hari3;
    $jadwal_dokter->hari4 = $request->hari4;
    $jadwal_dokter->hari5 = $request->hari5;
    $jadwal_dokter->hari6 = $request->hari6;

    $jadwal_dokter->save();

    return redirect()
    ->route('admin.data.jadwalDokter')
    ->withSuccess('Jadwal Telah Ditambahkan.');
  }
    public function delete($id)
    {
      $jadwal_dokter = DB::table('jadwal_dokters')->where('id', $id)->delete();
      return redirect()
      ->route('admin.data.jadwalDokter')
      ->withSuccess('Jadwal Dokter Berhasil Dihapuskan.');
    }
    public function edit($id)
    {
      $jadwal_dokter = DB::table('jadwal_dokters')->where('id', $id)->first();
      return view('/admin/editJadwalDokter', ['jadwal_dokter' => $jadwal_dokter]);
    }

    public function update(Request $request, $id)
    {
        $jadwal_dokter = Jadwal_Dokter::where('id',$id)->first();
        $jadwal_dokter->bulan = $request->bulan;
        $jadwal_dokter->hari1 = $request->hari1;
        $jadwal_dokter->hari2 = $request->hari2;
        $jadwal_dokter->hari3 = $request->hari3;
        $jadwal_dokter->hari4 = $request->hari4;
        $jadwal_dokter->hari5 = $request->hari5;
        $jadwal_dokter->hari6 = $request->hari6;
        $jadwal_dokter->save();
        return redirect()
        ->route('admin.data.jadwalDokter')
        ->with('alert-success','Data berhasil diubah!');
    }
}
