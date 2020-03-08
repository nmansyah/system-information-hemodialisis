<?php

namespace App\Http\Controllers\Pegawai;

use App\Models\Kehadiran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store($pasien_id, $sesi)
    {
        try {
            $now = Carbon::now();
            $cek = Kehadiran::where('tanggal', date('Y-m-d', strtotime($now)))
                ->where('sesi', $sesi)
                ->where('pasien_id', $pasien_id)
                ->first();
            if(is_null($cek)){
                $model = new Kehadiran;
                $model->pasien_id = $pasien_id;
                $model->tanggal = $now;
                $model->kehadiran = 'Hadir';
                $model->sesi = $sesi;
                if(!$model->save()){
                    throw new \Exception('Failed to add attendances');
                }
                return redirect()->back()->with('success', 'Berhasil menambahkan kehadiran');
            }
            throw new \Exception('Pasien ini kehadirannya telah ditambahkan sebelumnya');
        }catch (\Exception $e){
            return redirect()->back()->with('alert', $e->getMessage());
        }
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
