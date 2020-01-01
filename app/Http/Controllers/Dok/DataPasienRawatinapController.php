<?php

namespace App\Http\Controllers\Dok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Dok;
use App\Models\Pasien;
use App\Models\Pasien_Rawatinap;
use Auth;

class DataPasienRawatinapController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('dok');
    }

    public function index()
    {
      $pasien = Pasien::all();
      $pasien_rawatinap = Pasien_Rawatinap::all();
      return view('dok/dataPasienRawatinap', [
        'pasien' => $pasien, 
        'pasien_rawatinap' => $pasien_rawatinap
      ]);
    }
}
