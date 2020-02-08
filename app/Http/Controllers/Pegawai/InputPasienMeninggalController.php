<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien_Meninggal;
use App\Models\Pasien;
use Auth;

class InputPasienMeninggalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function show()
    {
      $pasien= Pasien::all();
      $pasien_meninggal= Pasien_Meninggal::all();
      return view('pegawai/dataPasienMeninggal', [
        'pasien' => $pasien, 
        'pasien_meninggal' => $pasien_meninggal
      ]);

    }

    public function index()
    {
        $pasien = Pasien::all();
        return view('pegawai/inputPasienMeninggal', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien_meninggal = new Pasien_Meninggal;

        $pasien_meninggal->pasien_id = $request->nama;
        $pasien_meninggal->alamat = $request->alamat;
        $pasien_meninggal->no_hp = $request->no_hp;
        $pasien_meninggal->tanggal = $request->tanggal;
        $pasien_meninggal->save();

        return redirect()
            ->route('pegawai.data.pasienMeninggal')
            ->withSuccess('Pasien Meninggal Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $pasien_meninggal = DB::table('pasien_meninggals')->where('id', $id)->delete();
        return redirect()
            ->route('pegawai.data.pasienMeninggal')
            ->withSuccess('Data Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $pasien_meninggal = DB::table('pasien_meninggals')->where('id', $id)->first();
        return view('/pegawai/editPasienMeninggal', ['pasien_meninggal' => $pasien_meninggal]);
    }

    public function update(Request $request, $id)
    {
        $pasien_meninggal = Pasien_Meninggal::where('id', $id)->first();
        $pasien_meninggal->alamat = $request->alamat;
        $pasien_meninggal->no_hp = $request->no_hp;
        $pasien_meninggal->tanggal = $request->tanggal;
        $pasien_meninggal->save();

        return redirect()
            ->route('pegawai.data.pasienMeninggal')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
