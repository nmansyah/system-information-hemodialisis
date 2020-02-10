<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminJadwalPasienHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasienSenin = Pasien::where('hari1', 'Senin')
            ->orWhere('hari2', 'Senin')
            ->orWhere('hari3', 'Senin')
            ->get();
        $pasienSenin = $pasienSenin->filter(function ($val, $key) {
           return !$val->is_died();
        });
        $pasienSelasa = Pasien::where('hari1', 'Selasa')
            ->orWhere('hari2', 'Selasa')
            ->orWhere('hari3', 'Selasa')
            ->get();
        $pasienSelasa = $pasienSelasa->filter(function ($val, $key) {
            return !$val->is_died();
        });
        $pasienRabu = Pasien::where('hari1', 'Rabu')
            ->orWhere('hari2', 'Rabu')
            ->orWhere('hari3', 'Rabu')
            ->get();
        $pasienRabu = $pasienRabu->filter(function ($val, $key) {
            return !$val->is_died();
        });
        $pasienKamis = Pasien::where('hari1', 'Kamis')
            ->orWhere('hari2', 'Kamis')
            ->orWhere('hari3', 'Kamis')
            ->get();
        $pasienKamis = $pasienKamis->filter(function ($val, $key) {
            return !$val->is_died();
        });
        $pasienJumat = Pasien::where('hari1', 'Jumat')
            ->orWhere('hari2', 'Jumat')
            ->orWhere('hari3', 'Jumat')
            ->get();
        $pasienJumat = $pasienJumat->filter(function ($val, $key) {
            return !$val->is_died();
        });
        $pasienSabtu = Pasien::where('hari1', 'Sabtu')
            ->orWhere('hari2', 'Sabtu')
            ->orWhere('hari3', 'Sabtu')
            ->get();
        $pasienSabtu = $pasienSabtu->filter(function ($val, $key) {
            return !$val->is_died();
        });

        return view('admin.Jadwal.PasienHarian.index', [
            'pasienSenin' => $pasienSenin,
            'pasienSelasa' => $pasienSelasa,
            'pasienRabu' => $pasienRabu,
            'pasienKamis' => $pasienKamis,
            'pasienJumat' => $pasienJumat,
            'pasienSabtu' => $pasienSabtu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
