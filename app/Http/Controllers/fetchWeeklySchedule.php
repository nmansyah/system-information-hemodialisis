<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\PerpindahanJadwal;
use Auth;

class fetchWeeklySchedule extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        try {
            $pasienSenin = Pasien::whereDoesntHave('pasienMeninggal')
                ->whereDoesntHave('pasienTraveling')
                ->where(function ($q) {
                    $q->where('hari1', 'Senin')
                        ->orWhere('hari2', 'Senin')
                        ->orWhere('hari3', 'Senin');
                })
                ->get();
            $pasienSelasa = Pasien::whereDoesntHave('pasienMeninggal')
                ->whereDoesntHave('pasienTraveling')
                ->where(function ($q) {
                    $q->where('hari1', 'Selasa')
                        ->orWhere('hari2', 'Selasa')
                        ->orWhere('hari3', 'Selasa');
                })
                ->get();
    
            $pasienRabu = Pasien::whereDoesntHave('pasienMeninggal')
                ->whereDoesntHave('pasienTraveling')
                ->where(function ($q) {
                    $q->where('hari1', 'Rabu')
                        ->orWhere('hari2', 'Rabu')
                        ->orWhere('hari3', 'Rabu');
                })
                ->get();
    
            $pasienKamis = Pasien::whereDoesntHave('pasienMeninggal')
                ->whereDoesntHave('pasienTraveling')
                ->where(function ($q) {
                    $q->where('hari1', 'Kamis')
                        ->orWhere('hari2', 'Kamis')
                        ->orWhere('hari3', 'Kamis');
                })
                ->get();
    
            $pasienJumat = Pasien::whereDoesntHave('pasienMeninggal')
                ->whereDoesntHave('pasienTraveling')
                ->where(function ($q) {
                    $q->where('hari1', 'Jumat')
                        ->orWhere('hari2', 'Jumat')
                        ->orWhere('hari3', 'Jumat');
                })
                ->get();
    
            $pasienSabtu = Pasien::whereDoesntHave('pasienMeninggal')
                ->whereDoesntHave('pasienTraveling')
                ->where(function ($q) {
                    $q->where('hari1', 'Sabtu')
                        ->orWhere('hari2', 'Sabtu')
                        ->orWhere('hari3', 'Sabtu');
                })
                ->get();

            $temporaryPatients = PerpindahanJadwal::where('is_active', true)->with('pasien')->get();
            
            $user = Auth::user();
            $view = 'pegawai.Jadwal.PasienMingguan.index';
            if($user->role == 1){
                $view = 'admin.Jadwal.PasienMingguan.index';
            }

            return view($view, [
                'pasienSenin' => $pasienSenin,
                'pasienSelasa' => $pasienSelasa,
                'pasienRabu' => $pasienRabu,
                'pasienKamis' => $pasienKamis,
                'pasienJumat' => $pasienJumat,
                'pasienSabtu' => $pasienSabtu,
                'temporaryPatients' => $temporaryPatients
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }
}
