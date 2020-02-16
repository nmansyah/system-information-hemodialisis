<?php

namespace App\Http\Controllers\Pegawai;

use PDF;
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
        return view('pegawai.Askep.dataAskep', [
            'pasien' => $pasien,
            'perawat' => $perawat,
            'askep' => $askep
        ]);
    }

    public function show($pasien_id, $askep_id){
        $model = Askep::findOrFail($askep_id);
        $perawat = Perawat::all();
        return view('pegawai.Askep.askepDetail', [
            'askep' => $model,
            'perawat' => $perawat
        ]);
    }

    public function printAskep($pasien_id, $askep_id){
        $model = Askep::findOrFail($askep_id);
        $perawat = Perawat::all();

//        $dompdf = new PDF();
//        $html = $this->loadView('pegawai.Askep.printAskep', [
//            'askep' => $model,
//            'perawat' => $perawat
//        ])->setPaper('a4', 'landscape');
//        $html .= '<link type="text/css" href="/absolute/path/to/pdf.css" rel="stylesheet" />';
//        $dompdf->loadHtml($html);
//        $pdf = PDF::loadHTML('<h1 style="color:red">Test</h1>');
//        return $pdf->stream();
        $pdf = PDF::loadView('pegawai.Askep.printAskep', [
            'askep' => $model,
            'perawat' => $perawat
        ])->setPaper('A4', 'potrait');
        return $pdf->stream();
    }

    public function tes($pasien_id, $askep_id){
        $model = Askep::findOrFail($askep_id);
        $perawat = Perawat::all();
        return view('pegawai.Askep.printAskep3', ['askep' => $model, 'perawat' => $perawat]);
    }

     public function delete($pasien_id, $id)
     {
         $model = Askep::findOrFail($id);
         if (!$model->delete()){
             return redirect()->back()->with('alert', 'Gagal menghapus ');
         }
         $pasien = Pasien::findOrFail($pasien_id);
         return redirect()
             ->route('pegawai.data.askep', $pasien->id)
             ->withSuccess('Data Berhasil Dihapuskan.');
     }

    public function update(Request $request, $pasien_id, $askep_id){
        try {
            $model = Askep::findOrFail($askep_id);
            $validator = Validator::make($request->all(), $model->rules);
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('alert', $validator->errors()->first())
                    ->withInput(Input::all());
            }

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
