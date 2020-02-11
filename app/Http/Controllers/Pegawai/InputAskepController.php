<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Pasien;
use App\Models\Perawat;
use App\Models\Askep;
use Auth;

class InputAskepController extends Controller
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
        return view('pegawai.Askep.inputAskepNew', [
            'pasien' => $pasien,
            'perawat' => $perawat
        ]);
    }

    public function store(Request $request, $pasien_id){
        try {
            $model = new Askep;
            $validator = Validator::make($request->all(), $model->rules);
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('alert', $validator->errors()->first())
                    ->withInput(Input::all());
            }

//            if ($model->isDuplicateRM($request->no_rm, 'store')){
//                return redirect()->back()
//                    ->with('alert', 'No rm sudah terpakai')
//                    ->withInput(Input::all());
//            }

            $res = $model->populate($request, $pasien_id);
            if (is_string($res)){
                throw new \Exception($res);
            }
            return redirect()->route('pegawai.data.askep', ['pasien_id' => $pasien_id]);
        }catch (\Exception $e){
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }

}
