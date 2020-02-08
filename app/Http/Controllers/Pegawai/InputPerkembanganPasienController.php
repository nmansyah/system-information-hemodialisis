<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien;
use App\Models\Perkembangan_Pasien;
use Auth;

class InputPerkembanganPasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function show()
    {
      $pasien = Pasien::all();
      $perkembangan_pasien = Perkembangan_Pasien::all();
      return view('pegawai/dataPerkembanganPasien', [
        'pasien' => $pasien,
        'perkembangan_pasien' => $perkembangan_pasien
      ]);
    }

    public function index()
    {
        $pasien = Pasien::all();
        return view('pegawai/inputPerkembanganPasien', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        $pasien = new Pasien;
        $perkembangan_pasien = new Perkembangan_Pasien;
        $perkembangan_pasien->pasien_id = $request->nama;

        $perkembangan_pasien->tanggal = $request->tanggal;
        $perkembangan_pasien->hb = $request->hb;
        $perkembangan_pasien->ureum = $request->ureum;
        $perkembangan_pasien->kreatinin = $request->kreatinin;
        $perkembangan_pasien->obat = $request->obat;
        $perkembangan_pasien->save();

        return redirect()
            ->route('pegawai.data.perkembanganPasien')
            ->with('alert-success', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        $perkembangan_pasien = DB::table('perkembangan_pasiens')->where('id', $id)->delete();
        return redirect()
            ->route('pegawai.data.perkembanganPasien')
            ->withSuccess('Perkembangan Pasien Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $perkembangan_pasien = DB::table('perkembangan_pasiens')->where('id', $id)->first();
        return view('/pegawai/editPerkembanganPasien', ['perkembangan_pasien' => $perkembangan_pasien]);
    }

    public function update(Request $request, $id)
    {
        $perkembangan_pasien = Perkembangan_Pasien::where('id', $id)->first();
        $perkembangan_pasien->tanggal = $request->tanggal;
        $perkembangan_pasien->hb = $request->hb;
        $perkembangan_pasien->ureum = $request->ureum;
        $perkembangan_pasien->kreatinin = $request->kreatinin;
        $perkembangan_pasien->obat = $request->obat;
        $perkembangan_pasien->save();
        return redirect()
            ->route('pegawai.data.perkembanganPasien')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
