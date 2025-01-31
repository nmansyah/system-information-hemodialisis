<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien_Travel;
use App\Models\Pasien;
use Auth;

class InputPasienTravelingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function show()
    {
        $pasien = Pasien::all();
        $pasien_traveling = Pasien_Travel::all();
        return view('pegawai/dataPasienTraveling', [
            'pasien' => $pasien,
            'pasien_traveling' => $pasien_traveling
        ]);
    }

    public function index()
    {
        $pasien = Pasien::whereDoesntHave('pasienMeninggal')
            ->whereDoesntHave('pasienTraveling')->get();
        return view('pegawai/inputPasienTraveling', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        $pasien = new Pasien;
        $pasien_traveling = new Pasien_Travel;

        $pasien_traveling->pasien_id = $request->nama;
        $pasien_traveling->alamat = $request->alamat;
        $pasien_traveling->no_hp = $request->no_hp;
        $pasien_traveling->tanggal = $request->tanggal;
        $pasien_traveling->save();

        return redirect()
            ->route('pegawai.data.pasienTraveling')
            ->withSuccess('Pasien Traveling Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $pasien_traveling = DB::table('pasien_travelings')->where('id', $id)->delete();
        return redirect()
            ->route('pegawai.data.pasienTraveling')
            ->withSuccess('Data Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $pasien_traveling = DB::table('pasien_travelings')->where('id', $id)->first();
        return view('/pegawai/editPasienTraveling', ['pasien_traveling' => $pasien_traveling]);
    }

    public function update(Request $request, $id)
    {
        $pasien_traveling = Pasien_Travel::where('id', $id)->first();
        $pasien_traveling->alamat = $request->alamat;
        $pasien_traveling->no_hp = $request->no_hp;
        $pasien_traveling->tanggal = $request->tanggal;
        $pasien_traveling->save();

        return redirect()
            ->route('pegawai.data.pasienTraveling')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
