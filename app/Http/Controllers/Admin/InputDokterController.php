<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Dokter;
use Auth;

class InputDokterController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function show()
    {
      $dokter = Dokter::all();
      return view('admin/dataDokter',[
        'dokter' => $dokter
      ]);
    }

    public function index()
    {
      return view('admin/inputDokter');
    }

    public function store(Request $request)
    {
      $dokter = new Dokter;

      $dokter->nama = $request->nama;
      $dokter->jenis_kelamin = $request->jenis_kelamin;
      $dokter->alamat = $request->alamat;
      $dokter->email = $request->email;
      $dokter->no_hp = $request->no_hp;
      $dokter->save();

      return redirect()
      ->route('admin.data.dokter')
      ->withSuccess('alert-success','Dokter Telah Ditambahkan.');
    }

    public function delete($id)
    {
      $dokter = DB::table('dokters')->where('id', $id)->delete();
      return redirect()
      ->route('admin.data.dokter')
      ->withSuccess('Dokter Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
      $dokter = DB::table('dokters')->where('id', $id)->first();
      return view('/admin/editDokter', ['dokter' => $dokter]);
    }

    public function update(Request $request, $id)
    {
        $dokter = Dokter::where('id',$id)->first();
        $dokter->nama = $request->nama;
        $dokter->email = $request->email;
        $dokter->alamat = $request->alamat;
        $dokter->no_hp = $request->no_hp;
        $dokter->save();
        return redirect()
        ->route('admin.data.dokter')
        ->with('alert-success','Data berhasil diubah!');
    }
}