<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kelola_Kegiatan;
use Auth;

class InputKegiatanController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {

      return view('admin/inputKegiatan');
    }

    public function store(Request $request)
    {
      $kelola_kegiatan = new Kelola_Kegiatan;

      $kelola_kegiatan->tanggal = $request->tanggal;
      $kelola_kegiatan->desk = $request->desk;

      $file=$request->file('photo');
      $filename=$file->getClientOriginalName();
      $request->file('photo')->move("photo_kegiatan/", $filename);
      $kelola_kegiatan->photo=$filename;

      $kelola_kegiatan->save();

      return redirect()
      ->route('data.kegiatan')
      ->withSuccess('Kegiatan Telah Ditambahkan.');
    }
}
