<?php

namespace App\Http\Controllers\Admin;

use App\Models\Perkembangan_Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPerkembanganPasienController extends Controller
{
    public function show($pasien_id){
        $model = Perkembangan_Pasien::where('pasien_id', $pasien_id)->with('pasien')->get();
        if (is_null($model)){
            return redirect()->back()->with(['alert', 'Failed pasien belum memiliki data']);
        }
        return view('admin.detailPerkembanganPasien', ['dataPerkembanganPasiens' => $model]);
    }
}
