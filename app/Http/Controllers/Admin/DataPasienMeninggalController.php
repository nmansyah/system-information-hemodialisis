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
use App\Models\Pasien_Meninggal;
use Auth;

class DataPasienMeninggalController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      $pasien= Pasien::all();
      $pasien_meninggal= Pasien_Meninggal::all();
      return view('admin/dataPasienMeninggal', [
        'pasien' => $pasien, 
        'pasien_meninggal' => $pasien_meninggal
      ]);

    }
}
