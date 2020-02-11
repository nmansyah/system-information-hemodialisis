<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pasien;
use Auth;

class InputPasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function show()
    {
        $pasien = Pasien::all();
        return view('admin/dataPasien', [
            'pasien' => $pasien
        ]);
    }

    public function index()
    {
        $insurances = ['BPI', 'BPJS', 'PRUDENTIAL', 'MANDIRI', 'Lain - lain'];
        return view('admin/inputPasien', ['insurances' => $insurances]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_cm' => 'required|unique:pasiens',
        ]);

        $pasien = new Pasien;
        $pasien->no_cm = $request->no_cm;
        $pasien->nama = $request->nama;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->alamat = $request->alamat;
        $pasien->no_hp = $request->no_hp;
        $pasien->usia = $request->usia;
        $pasien->riwayat = $request->riwayat;
        if ($request->asuransi == 'Lain - lain') {
            if (is_null($request->asuransi_text)) {
                return redirect()->back()->with('alert', 'Field asuransi cant be blank');
            }
            $pasien->asuransi = $request->asuransi_text;
        } else {
            $pasien->asuransi = $request->asuransi;
        }
        $pasien->hari1 = $request->hari1;
        $pasien->sesi1 = $request->sesi1;
        $pasien->hari2 = $request->hari2;
        $pasien->sesi2 = $request->sesi2;
        $pasien->hari3 = $request->hari3;
        $pasien->sesi3 = $request->sesi3;
        if (!$pasien->save()) {
            return redirect()->back()->with('alert', 'Failed to store data');
        }

        return redirect()
            ->route('admin.data.pasien')
            ->withSuccess('Pasien Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $pasien = DB::table('pasiens')->where('id', $id)->delete();
        return redirect()
            ->route('admin.data.pasien')
            ->withSuccess('Dokter Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $pasien = DB::table('pasiens')->where('id', $id)->first();
        return view('/admin/editPasien', ['pasien' => $pasien]);
    }

    public function update(Request $request, $id)
    {
        $model = Pasien::where('no_cm', $request->no_cm)->get();
        if ($model->count() > 1) {
            return redirect()->back()->with('alert', 'no cm must be uniq');
        }
        $pasien = Pasien::where('id', $id)->first();
        if (!is_null($model)) {
            if ($pasien->no_cm != $model[0]->no_cm) {
                return redirect()->back()->with('alert', 'no cm must be uniq');
            }
        }
        $pasien->no_cm = $request->no_cm;
        $pasien->nama = $request->nama;
        $pasien->usia = $request->usia;
        $pasien->alamat = $request->alamat;
        $pasien->asuransi = $request->asuransi;
        $pasien->riwayat = $request->riwayat;
        $pasien->no_hp = $request->no_hp;
        $pasien->hari1 = $request->hari1;
        $pasien->sesi1 = $request->sesi1;
        $pasien->hari2 = $request->hari2;
        $pasien->sesi2 = $request->sesi2;
        $pasien->hari3 = $request->hari3;
        $pasien->sesi3 = $request->sesi3;
        $pasien->save();
        return redirect()
            ->route('admin.data.pasien')
            ->with('alert-success', 'Data berhasil diubah!');
    }
}
