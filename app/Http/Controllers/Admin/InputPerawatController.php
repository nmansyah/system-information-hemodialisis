<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Perawat;
use Auth;

class InputPerawatController extends Controller
{
    public function index()
    {
      return view('admin/inputPerawat');
    }

    public function store(Request $request)
    {
      $perawat = new Perawat;

      $perawat->nama = $request->nama;
      $perawat->jenis_kelamin = $request->jenis_kelamin;
      $perawat->pendidikan = $request->pendidikan;
      $perawat->email = $request->email;
      $perawat->alamat = $request->alamat;
      $perawat->no_hp = $request->no_hp;
      $perawat->save();

      return redirect()
      ->route('data.perawat')
      ->withSuccess('Perawat Telah Ditambahkan.');
    }

    public function delete($id)
    {
      $perawat = DB::table('perawats')->where('id', $id)->delete();
      return redirect()
      ->route('data.perawat')
      ->withSuccess('Perawat Berhasil Dihapuskan.');
    }

    public function edit($id)
    {
      $perawat = DB::table('perawats')->where('id', $id)->first();
      return view('/admin/editPerawat', ['perawat' => $perawat]);
    }

    public function update(Request $request, $id)
    {
        $perawat = Perawat::where('id',$id)->first();
        $perawat->nama = $request->nama;
        $perawat->pendidikan = $request->pendidikan;
        $perawat->email = $request->email;
        $perawat->alamat = $request->alamat;
        $perawat->no_hp = $request->no_hp;
        $perawat->save();
        return redirect()
        ->route('data.perawat')
        ->with('alert-success','Data berhasil diubah!');
    }
}
