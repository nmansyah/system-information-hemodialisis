<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kehadiran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStatusKehadiranController extends Controller
{
    public function index(){
        $kehadiranSesi1 = Kehadiran::where('sesi', 'Sesi 1')
            ->where('tanggal', Carbon::today())
            ->with('pasien')->get();
        $kehadiranSesi2 = Kehadiran::where('sesi', 'Sesi 2')
            ->where('tanggal', Carbon::today())
            ->with('pasien')->get();
        $kehadiranSesi3 = Kehadiran::where('sesi', 'Sesi 3')
            ->where('tanggal', Carbon::today())
            ->with('pasien')->get();

        return view('admin.StatusKehadiran.index', [
            'kehadiranSesi1' => $kehadiranSesi1,
            'kehadiranSesi2' => $kehadiranSesi2,
            'kehadiranSesi3' => $kehadiranSesi3
        ]);
    }
}
