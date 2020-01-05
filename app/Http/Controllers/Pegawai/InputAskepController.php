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
        return view('pegawai/inputAskepNew', [
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

            $model->pasien_id = $pasien_id;
            $model->perawat_id = $request->perawat_id;
            $model->no_rm = $request->no_rm;
            $model->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
            $model->sesi = $request->sesi;
            $model->hemodialisa_number = $request->hemodialisa_number;
            $model->dialiser_type = $request->dialiser_type;

            $model->keluhan_utama_sesak_nafas = ($request->keluhan_utama_sesak_nafas == 'true' ? 1 : 0);
            $model->keluhan_utama_mual = ($request->keluhan_utama_mual == 'true' ? 1 : 0);
            $model->keluhan_utama_gatal = ($request->keluhan_utama_gatal == 'true' ? 1 : 0);

            $model->keadaan_umum = $request->keadaan_umum;
            $model->konjungtiva = $request->konjungtiva;

            $model->ekstrimitas_not_edema_or_dehidrasi = ($request->ekstrimitas_not_edema_or_dehidrasi == 'true' ? 1 : 0);
            $model->ekstrimitas_dehidrasi = ($request->ekstrimitas_dehidrasi == 'true' ? 1 : 0);
            $model->ekstrimitas_edema = $model->checkIsTrue($request->ekstrimitas_edema);
            $model->ekstrimitas_edema_anasarka = $model->checkIsTrue($request->ekstrimitas_edema_anasarka);
            $model->ekstrimitas_pucat_and_dingin = $model->checkIsTrue($request->ekstrimitas_pucat_and_dingin);

            $model->berat_badan_kering = $request->berat_badan_kering;
            $model->berat_badan_pre_hd = $request->berat_badan_pre_hd;
            $model->berat_badan_hd = $request->berat_badan_hd;
            $model->akses_vaskular = $request->akses_vaskular;
            $model->hd_kateter = $request->hd_kateter;
            $model->pemeriksaan_penunjang = $request->pemeriksaan_penunjang;

            $model->diagnosa_kelebihan_volume_cairan = ($request->diagnosa_kelebihan_volume_cairan == 'true' ? 1 : 0);
            $model->diagnosa_resiko_ketidakstabilan_tekanan_darah = $model->checkIsTrue($request->diagnosal_resiko_ketidakstabilan_tekanan_darah);
            $model->diagnosa_gangguan_keseimbangan_elektrolit = $model->checkIsTrue($request->diagnosa_gangguan_keseimbangan_elektrolit);
            $model->diagnosa_resiko_ketidakstabilan_kadar_gula_darah = $model->checkIsTrue($request->diagnosal_resiko_ketidakstabilan_kadar_gula_darah);
            $model->diagnosa_resiko_infeksi = $model->checkIsTrue($request->diagnosal_resiko_infeksi);

            $model->intervensi_keperawatan_monitor_berat_badan = $model->checkIsTrue($request->intervensi_keperawatan_monitor_keperawatan);
            $model->intervensi_keperawatan_penkes = $model->checkIsTrue($request->intervensi_keperawatan_penkes);
            $model->intervensi_keperawatan_lakukan_akses_vaskular = $model->checkIsTrue($request->intervensi_keperawatan_lakukan_akses_vaskular);
            $model->intervensi_keperawatan_lakukan_hd = $model->checkIsTrue($request->intervensi_keperawatan_lakukan_hd);
            $model->intervensi_keperawatan_monitor_infeksi = $model->checkIsTrue($request->intervensi_keperawatan_monitor_infeksi);
            $model->intervensi_keperawatan_pasien_mulai_hipotensi = $model->checkIsTrue($request->intervensi_keperawatan_pasien_mulai_hipotensi);
            $model->intervensi_keperawatan_monitor_kompilasi = $model->checkIsTrue($request->intervensi_keperawatan_monitor_kompilasi);

            $model->intervensi_kolaborasi_program_hd = $model->checkIsTrue($request->intervensi_kolaborasi_program_hd);
            $model->intervensi_kolaborasi_transfusi_darah = $model->checkIsTrue($request->intervensi_kolaborasi_transfusi_darah);
            $model->intervensi_kolaborasi_diit = $model->checkIsTrue($request->intervensi_kolaborasi_diit);
            $model->intervensi_kolaborasi_pemberian_ca_glukonas = $model->checkIsTrue($request->intervensi_kolaborasi_pemberian_ca_glukonas);
            $model->intervensi_kolaborasi_antibiotik = $model->checkIsTrue($request->intervensi_kolaborasi_antibiotik);
            $model->intervensi_kolaborasi_antipiretik_and_analgetik = $model->checkIsTrue($request->intervensi_kolaborasi_antipiretik_and_analgetik);
            $model->intervensi_kolaborasi_pemberian_preparat_besi = $model->checkIsTrue($request->intervensi_kolaborasi_pemberian_preparat_besi);
            $model->intervensi_kolaborasi_obat_emegensi = $model->checkIsTrue($request->intervensi_kolaborasi_obat_emegensi);

            $model->resep_hd = $request->resep_hd;
            $model->td = $request->td;
            $model->qb = $request->qb;
            $model->qd = $request->qd;
            $model->uf_goal = $request->uf_goal;
            $model->dialisat_bicarbonat = $model->checkIsTrue($request->dialisat_bicarbonat);
            $model->conductivity = $request->conductivity;
            $model->temperatur = $request->temperatur;

            $model->heparinisasi_standar = $model->checkIsTrue($request->heparinisasi_standar);
            $model->heparinisasi_mini = $model->checkIsTrue($request->heparinisasi_mini);
            $model->heparinisasi_free_heparin = $model->checkIsTrue($request->heparinisasi_free_heparin);
            $model->heparinisasi_lmwh = $model->checkIsTrue($request->heparinisasi_lmwh);

            if (!$model->save()){
                throw new \Exception('Gagal manambah data');
            }
            return redirect()->route('pegawai.data.askep', ['pasien_id' => $pasien_id]);
        }catch (\Exception $e){
            return redirect()->back()->with('alert', $e->getMessage());
        }
    }


}
