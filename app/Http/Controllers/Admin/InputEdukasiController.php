<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kelola_Edukasi;
use Auth;

class InputEdukasiController extends Controller
{
    public function index()
    {

      return view('admin/inputEdukasi');
    }

    public function store(Request $request)
    {
      $kelola_edukasi = new Kelola_Edukasi;

      $kelola_edukasi->tanggal = $request->tanggal;
      $kelola_edukasi->desk = $request->desk;

      $file=$request->file('photo');
      $filename=$file->getClientOriginalName();
      $request->file('photo')->move("photo_edukasi/", $filename);
      $kelola_edukasi->photo=$filename;

      $kelola_edukasi->save();

      return redirect()
      ->route('data.edukasi')
      ->withSuccess('Edukasi Telah Ditambahkan.');
    }
}
