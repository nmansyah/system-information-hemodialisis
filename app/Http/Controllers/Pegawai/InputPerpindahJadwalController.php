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
use App\Models\Perpindahan_Jadwal;
use Auth;

class InputPerpindahJadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }

    public function show()
    {
        $pasien = Pasien::all();
        $perpindahan_jadwal = Perpindahan_Jadwal::all();
        return view('pegawai/dataPerpindahJadwal', [
            'pasien' => $pasien,
            'perpindahan_jadwal' => $perpindahan_jadwal
        ]);
    }

    public function index()
    {
        $pasien = Pasien::whereDoesntHave('pasienMeninggal')
            ->whereDoesntHave('pasienTraveling')->get();
        return view('pegawai/inputPerpindahanJadwal', [
            'pasien' => $pasien
        ]);
    }

    public function store(Request $request)
    {
        try {
            $pasien = Pasien::find($request->nama);
            if( ($pasien->sesi1 == $request->old_session && $pasien->hari1 == $request->old_day) ||
                ($pasien->sesi2 == $request->old_session && $pasien->hari2 == $request->old_day) ||
                ($pasien->sesi3 == $request->old_session && $pasien->hari3 == $request->old_day) )
            {
                $perpindahan_jadwal = new Perpindahan_Jadwal;
                $perpindahan_jadwal->pasien_id = $request->nama;
                $perpindahan_jadwal->tanggal = $request->tanggal;
                $perpindahan_jadwal->old_day = $request->old_day;
                $perpindahan_jadwal->old_session = $request->old_session;
                $perpindahan_jadwal->hari1 = $request->hari1;
                $perpindahan_jadwal->sesi1 = $request->sesi1;
                if (!$perpindahan_jadwal->save()){
                    throw new \Exception('Failed to save reschedule data');
                }
                return redirect()
                    ->route('pegawai.data.perpindahanJadwal')
                    ->withSuccess('Jadwal Telah Dipindahkan.');
            }
            throw new \Exception('Data hari dan sesi sebelumnya tidak valid');
        }catch (\Exception $e){
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $perpindahan_jadwal = DB::table('perpindahan_jadwals')->where('id', $id)->delete();
        return redirect()
            ->route('pegawai.data.perpindahanJadwal')
            ->withSuccess('Jadwal Pasien Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $perpindahan_jadwal = DB::table('perpindahan_jadwals')->where('id', $id)->first();
        return view('/pegawai/editPerpindahanJadwal', ['perpindahan_jadwal' => $perpindahan_jadwal]);
    }

    public function update(Request $request, $id)
    {
        $perpindahan_jadwal = Perpindahan_Jadwal::where('id', $id)->first();
        $perpindahan_jadwal->tanggal = $request->tanggal;
        $perpindahan_jadwal->hari1 = $request->hari1;
        $perpindahan_jadwal->sesi1 = $request->sesi1;
        $perpindahan_jadwal->old_day = $request->old_day;
        $perpindahan_jadwal->old_session = $request->old_session;
        $perpindahan_jadwal->is_active = $request->status;
        $perpindahan_jadwal->save();
        return redirect()
            ->route('pegawai.data.perpindahanJadwal')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
