<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kehadiran_Pasien;
use Auth;

class DataKehadiranPasienController extends Controller
{
    public function index()
    {
      $kehadiran_pasien = Kehadiran_Pasien::all();
      $categories = Kehadiran_Pasien::all();
      $data1 = Kehadiran_Pasien::all();
      $data2 = Kehadiran_Pasien::all();
      return view('admin/dataKehadiranPasien',[
        'kehadiran_pasien' => $kehadiran_pasien,
        'categories' => $categories,
        'data1' => $data1,
        'data2' => $data2
      ]);    
    }
    
}
