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
use App\Models\Pasien_Rawatinap;
use Auth;
class DataPasienRawatinapController extends Controller
{
    public function index()
    {
      $pasien = Pasien::all();
      $pasien_rawatinap = Pasien_Rawatinap::all();
      return view('admin/dataPasienRawatinap', [
        'pasien' => $pasien, 
        'pasien_rawatinap' => $pasien_rawatinap
      ]);
    }
}
