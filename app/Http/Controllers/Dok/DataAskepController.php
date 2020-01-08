<?php

namespace App\Http\Controllers\Dok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Dok;
use App\Models\Pasien;
use App\Models\Perawat;
use App\Models\Askep;
use Auth;

class DataAskepController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('dok');
    }


    public function index($pasien_id)
    {
        $pasien = Pasien::findOrFail($pasien_id);
        $perawat = Perawat::all();
        $askep = Askep::where('pasien_id', $pasien_id)->get();
        return view('dok.Askep.dataAskep', [
            'pasien' => $pasien,
            'perawat' => $perawat,
            'askep' => $askep
        ]);
    }
    public function show($pasien_id, $askep_id){
        $model = Askep::findOrFail($askep_id);
        $perawat = Perawat::all();
        return view('dok.Askep.askepDetail', [
            'askep' => $model,
            'perawat' => $perawat
        ]);
    }
}
