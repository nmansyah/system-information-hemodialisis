<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien_Rawatinap;
use App\Models\Pasien;
use Auth;

class InputPasienRawatinapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function show()
    {
        $pasien = Pasien::all();
        $pasien_rawatinap = Pasien_Rawatinap::all();
        return view('pegawai/dataPasienRawatinap', [
            'pasien' => $pasien,
            'pasien_rawatinap' => $pasien_rawatinap
        ]);
    }

    public function index()
    {
        $pasien = Pasien::whereDoesntHave('pasienMeninggal')
            ->whereDoesntHave('pasienTraveling')->get();
        return view('pegawai/inputPasienRawatinap', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien_rawatinap = new Pasien_Rawatinap;

        $pasien_rawatinap->pasien_id = $request->nama;
        $pasien_rawatinap->alamat = $request->alamat;
        $pasien_rawatinap->no_hp = $request->no_hp;
        $pasien_rawatinap->tanggal = $request->tanggal;
        $pasien_rawatinap->unit = $request->unit;
        $pasien_rawatinap->save();

        return redirect()
            ->route('pegawai.data.pasienRawatinap')
            ->withSuccess('Pasien Rawat Inap Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $pasien_rawatinap = DB::table('pasien_rawatinaps')->where('id', $id)->delete();
        return redirect()
            ->route('pegawai.data.pasienRawatinap')
            ->withSuccess('Data Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $pasien_rawatinap = DB::table('pasien_rawatinaps')->where('id', $id)->first();
        return view('/pegawai/editPasienRawatinap', ['pasien_rawatinap' => $pasien_rawatinap]);
    }

    public function update(Request $request, $id)
    {
        $pasien_rawatinap = Pasien_Rawatinap::where('id', $id)->first();
        $pasien_rawatinap->alamat = $request->alamat;
        $pasien_rawatinap->no_hp = $request->no_hp;
        $pasien_rawatinap->tanggal = $request->tanggal;
        $pasien_rawatinap->unit = $request->unit;
        $pasien_rawatinap->save();

        return redirect()
            ->route('pegawai.data.pasienRawatinap')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
