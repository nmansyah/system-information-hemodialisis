<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pasien_Meninggal;
use App\Models\Pasien;
use Auth;

class InputPasienMeninggalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $pasien = Pasien::all();
        return view('admin/inputPasienMeninggal', [
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
            ->route('admin.data.pasienMeninggal')
            ->withSuccess('Pasien Meninggal Telah Ditambahkan.');
    }

    public function delete($id)
    {
        $pasien_meninggal = DB::table('pasien_meninggals')->where('id', $id)->delete();
        return redirect()
            ->route('admin.data.pasienMeninggal')
            ->withSuccess('Data Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
        $pasien_meninggal = DB::table('pasien_meninggals')->where('id', $id)->first();
        return view('/admin/editPasienMeninggal', ['pasien_meninggal' => $pasien_meninggal]);
    }

    public function update(Request $request, $id)
    {
        $pasien_meninggal = Pasien_Meninggal::where('id', $id)->first();
        $pasien_meninggal->alamat = $request->alamat;
        $pasien_meninggal->no_hp = $request->no_hp;
        $pasien_meninggal->tanggal = $request->tanggal;
        $pasien_meninggal->save();

        return redirect()
            ->route('admin.data.pasienMeninggal')
            ->with('alert-success', 'Data berhasil diubah!');
    }

}
