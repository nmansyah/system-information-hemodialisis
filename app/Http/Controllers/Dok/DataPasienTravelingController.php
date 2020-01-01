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
use App\Models\Pasien_Travel;
use Auth;

class DataPasienTravelingController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('dok');
    }

    public function index()
    {
      $pasien = Pasien::all();
      $pasien_traveling = Pasien_Travel::all();
      return view('dok/dataPasienTraveling', [
        'pasien' => $pasien, 
        'pasien_traveling' => $pasien_traveling
      ]);
    }
}
