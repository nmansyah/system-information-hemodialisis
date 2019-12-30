<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Admin;
use App\Models\Dokter;
use Auth;

class DataDokterController extends Controller
{
    public function index()
    {
      $dokter = Dokter::all();
      return view('admin/dataDokter',[
        'dokter' => $dokter
      ]);
    }
}
