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
use Auth;

class DataPasienController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('dok');
    }


    public function index()
    {
      $pasien= Pasien::all();
      return view('dok/dataPasien',[
        'pasien' => $pasien
      ]);
    }
}
