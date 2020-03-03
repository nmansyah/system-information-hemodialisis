<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien;
use App\Models\Kehadiran;
use App\Models\Kehadiran_Pasien;
use Auth;

class InputKehadiranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function index($pasien_id)
    {
        $pasien = Pasien::findOrFail($pasien_id);
        if ($pasien->is_died()) {
            return redirect()->back()->with('alert', 'Pasien telah meninggal');
        }
        return view('pegawai/Kehadiran/inputKehadiran', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        $kehadiran_pasien = new Kehadiran_Pasien;
        $kehadiran_pasien->bulan = $request->bulan;
        $kehadiran_pasien->hadir = $request->hadir;
        $kehadiran_pasien->tdk_hadir = $request->tdk_hadir;
        $kehadiran_pasien->save();

        return redirect()
            ->route('pegawai.data.kehadiranPasien')
            ->withSuccess('Presensi Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $kehadiran_pasien = DB::table('kehadiran_pasiens')->where('id', $id)->delete();
        return redirect()
            ->route('pegawai.data.kehadiranPasien')
            ->withSuccess('Kehadiran Pasien Berhasil Dihapuskan.');
    }


    public function edit($id)
    {
        $kehadiran_pasien = DB::table('kehadiran_pasiens')->where('id', $id)->first();
        return view('/pegawai/editKehadiranPasien', ['kehadiran_pasien' => $kehadiran_pasien]);
    }

    public function update(Request $request, $id)
    {
        $kehadiran_pasien = Kehadiran_Pasien::where('id', $id)->first();
        $kehadiran_pasien->bulan = $request->bulan;
        $kehadiran_pasien->hadir = $request->hadir;
        $kehadiran_pasien->tdk_hadir = $request->tdk_hadir;
        $kehadiran_pasien->save();
        return redirect()
            ->route('pegawai.data.kehadiranPasien')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
