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
        return view('pegawai/Kehadiran/inputKehadiran', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request, $pasien_id)
    {
        $pasien = new Pasien;
        $kehadiran = new Kehadiran;

        $kehadiran->pasien_id = $pasien_id;
        $kehadiran->tanggal = $request->tanggal;
        $kehadiran->kehadiran = $request->kehadiran;
        $kehadiran->save();

        return redirect()
            ->route('pegawai.data.kehadiran', ['pasien_id' => $pasien_id])
            ->withSuccess('Kehadiran Telah Ditambahkan.');
    }

    public function delete($pasien_id, $id)
     {
         $model = Kehadiran::findOrFail($id);
         if (!$model->delete()){
             return redirect()->back()->with('alert', 'Gagal menghapus ');
         }
         $pasien = Pasien::findOrFail($pasien_id);
         return redirect()
             ->route('pegawai.data.kehadiran', $pasien->id)
             ->withSuccess('Data Berhasil Dihapuskan.');
     }

     public function edit($pasien_id, $id)
    {
        $kehadiran = DB::table('kehadirans')->where('kehadiran_id', $kehadiran_id)->first();
        return view('/pegawai/Kehadiran/editKehadiran', ['kehadiran' => $kehadiran]);
    }

    public function update(Request $request, $pasien_id, $kehadiran_id)
    {
        $kehadiran = Kehadiran::where('id', $id)->first();
        $kehadiran->pasien_id = $pasien;
        $kehadiran->tanggal = $request->tanggal;
        $kehadiran->kehadiran = $request->kehadiran;
        $kehadiran->save();

        return redirect()
            ->route('pegawai.data.kehadiran', $pasien->id)
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
