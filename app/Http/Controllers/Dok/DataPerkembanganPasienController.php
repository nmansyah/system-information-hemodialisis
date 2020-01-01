<?php

namespace App\Http\Controllers\Dok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\dok;
use App\Models\Pasien;
use App\Models\Perkembangan_Pasien;
use Auth;

class DataPerkembanganPasienController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('dok');
    }

    public function index()
    {
      $pasien = Pasien::all();
      $perkembangan_pasien = Perkembangan_Pasien::all();
      return view('dok/dataPerkembanganPasien', [
        'pasien' => $pasien,
        'perkembangan_pasien' => $perkembangan_pasien
      ]);
    }
}
