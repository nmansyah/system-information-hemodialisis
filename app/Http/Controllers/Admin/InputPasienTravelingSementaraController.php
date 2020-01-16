<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Travel_Sementara;
use App\Models\Pasien;
use Auth;

class InputPasienTravelingSementaraController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function show()
    {
      $pasien = Pasien::all();
      $pasien_traveling_sementara = Travel_Sementara::all();
      return view('admin/dataPasienTravelingSementara', [
        'pasien' => $pasien, 
        'pasien_traveling_sementara' => $pasien_traveling_sementara
      ]);
    }

    public function index()
    {
        $pasien = Pasien::all();
        return view('admin/inputPasienTravelingSementara', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien_traveling_sementara = new Travel_Sementara;

        $pasien_traveling_sementara->pasien_id = $request->nama;
        $pasien_traveling_sementara->alamat = $request->alamat;
        $pasien_traveling_sementara->no_hp = $request->no_hp;
        $pasien_traveling_sementara->tanggal_mulai = $request->tanggal_mulai;
        $pasien_traveling_sementara->tanggal_selesai = $request->tanggal_selesai;
        $pasien_traveling_sementara->tujuan = $request->tujuan;
        $pasien_traveling_sementara->save();

        return redirect()
            ->route('admin.data.pasienTravelingSementara')
            ->withSuccess('Pasien Traveling Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $pasien_traveling_sementara = DB::table('pasien_travel_sementaras')->where('id', $id)->delete();
        return redirect()
            ->route('admin.data.pasienTraveling')
            ->withSuccess('Data Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $pasien_traveling_sementara = DB::table('pasien_travel_sementaras')->where('id', $id)->first();
        return view('/admin/editPasienTravelingSementara', ['pasien_traveling_sementara' => $pasien_traveling_sementara]);
    }

    public function update(Request $request, $id)
    {
        $pasien_traveling_sementara = Travel_Sementara::where('id', $id)->first();
        $pasien_traveling_sementara->alamat = $request->alamat;
        $pasien_traveling_sementara->no_hp = $request->no_hp;
        $pasien_traveling_sementara->tanggal_mulai = $request->tanggal_mulai;
        $pasien_traveling_sementara->tanggal_selesai = $request->tanggal_selesai;
        $pasien_traveling_sementara->tujuan = $request->tujuan;
        $pasien_traveling_sementara->save();

        return redirect()
            ->route('admin.data.pasienTravelingSementara')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
