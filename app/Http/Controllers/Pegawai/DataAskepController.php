<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien;
use App\Models\Perawat;
use App\Models\Askep;
use Auth;

class DataAskepController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pegawai');
    }


    public function index($pasien_id)
    {
        $pasien = Pasien::findOrFail($pasien_id);
        $perawat = Perawat::all();
        $askep = Askep::where('pasien_id', $pasien_id)->get();
        return view('pegawai/dataAskep', [
            'pasien' => $pasien,
            'perawat' => $perawat,
            'askep' => $askep
        ]);
    }
}
