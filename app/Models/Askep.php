<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Askep extends Model
{
    protected $table = 'askeps';

    public $rules = [
        'tanggal_pemeriksaan' => 'required',
        'sesi' => 'required',
        'hemodialisa_number' => 'required',
        'dialiser_type' => 'required',
        'keadaan_umum' => 'required',
        'konjungtiva' => 'required',
    ];

//    public function isDuplicateRM($no_rm, $action){
//        $askep = Askep::where('no_rm', $no_rm)->first();
//        if (is_null($askep)){
//            return false;
//        }
//        if ($action == 'update'){
//            if ($askep->id == $this->id){
//                return false;
//            }
//        }
//        return true;
//    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function checkIsTrue($attribute){
        return ($attribute == 'true' ? 1 : 0);
    }

    public function populate($request, $pasien_id){
        $this->pasien_id = $pasien_id;
        $this->perawat_id = $request->perawat_id;
        $this->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $this->sesi = $request->sesi;
        $this->hemodialisa_number = $request->hemodialisa_number;
        $this->dialiser_type = $request->dialiser_type;

        $this->keluhan_utama_sesak_nafas = ($request->keluhan_utama_sesak_nafas == 'true' ? 1 : 0);
        $this->keluhan_utama_mual = ($request->keluhan_utama_mual == 'true' ? 1 : 0);
        $this->keluhan_utama_gatal = ($request->keluhan_utama_gatal == 'true' ? 1 : 0);

        $this->keadaan_umum = $request->keadaan_umum;
        $this->konjungtiva = $request->konjungtiva;

        $this->ekstrimitas_not_edema_or_dehidrasi = ($request->ekstrimitas_not_edema_or_dehidrasi == 'true' ? 1 : 0);
        $this->ekstrimitas_dehidrasi = ($request->ekstrimitas_dehidrasi == 'true' ? 1 : 0);
        $this->ekstrimitas_edema = $this->checkIsTrue($request->ekstrimitas_edema);
        $this->ekstrimitas_edema_anasarka = $this->checkIsTrue($request->ekstrimitas_edema_anasarka);
        $this->ekstrimitas_pucat_and_dingin = $this->checkIsTrue($request->ekstrimitas_pucat_and_dingin);

        $this->berat_badan_kering = $request->berat_badan_kering;
        $this->berat_badan_pre_hd = $request->berat_badan_pre_hd;
        $this->berat_badan_hd = $request->berat_badan_hd;
        $this->akses_vaskular = $request->akses_vaskular;
        $this->hd_kateter = $request->hd_kateter;
        $this->pemeriksaan_penunjang = $request->pemeriksaan_penunjang;

        $this->diagnosa_kelebihan_volume_cairan = ($request->diagnosa_kelebihan_volume_cairan == 'true' ? 1 : 0);
        $this->diagnosa_resiko_ketidakstabilan_tekanan_darah = $this->checkIsTrue($request->diagnosal_resiko_ketidakstabilan_tekanan_darah);
        $this->diagnosa_gangguan_keseimbangan_elektrolit = $this->checkIsTrue($request->diagnosa_gangguan_keseimbangan_elektrolit);
        $this->diagnosa_resiko_ketidakstabilan_kadar_gula_darah = $this->checkIsTrue($request->diagnosal_resiko_ketidakstabilan_kadar_gula_darah);
        $this->diagnosa_resiko_infeksi = $this->checkIsTrue($request->diagnosal_resiko_infeksi);

        $this->intervensi_keperawatan_monitor_berat_badan = $this->checkIsTrue($request->intervensi_keperawatan_monitor_berat_badan);
        $this->intervensi_keperawatan_penkes = $this->checkIsTrue($request->intervensi_keperawatan_penkes);
        $this->intervensi_keperawatan_lakukan_akses_vaskular = $this->checkIsTrue($request->intervensi_keperawatan_lakukan_akses_vaskular);
        $this->intervensi_keperawatan_lakukan_hd = $this->checkIsTrue($request->intervensi_keperawatan_lakukan_hd);
        $this->intervensi_keperawatan_monitor_infeksi = $this->checkIsTrue($request->intervensi_keperawatan_monitor_infeksi);
        $this->intervensi_keperawatan_pasien_mulai_hipotensi = $this->checkIsTrue($request->intervensi_keperawatan_pasien_mulai_hipotensi);
        $this->intervensi_keperawatan_monitor_kompilasi = $this->checkIsTrue($request->intervensi_keperawatan_monitor_kompilasi);

        $this->intervensi_kolaborasi_program_hd = $this->checkIsTrue($request->intervensi_kolaborasi_program_hd);
        $this->intervensi_kolaborasi_transfusi_darah = $this->checkIsTrue($request->intervensi_kolaborasi_transfusi_darah);
        $this->intervensi_kolaborasi_diit = $this->checkIsTrue($request->intervensi_kolaborasi_diit);
        $this->intervensi_kolaborasi_pemberian_ca_glukonas = $this->checkIsTrue($request->intervensi_kolaborasi_pemberian_ca_glukonas);
        $this->intervensi_kolaborasi_antibiotik = $this->checkIsTrue($request->intervensi_kolaborasi_antibiotik);
        $this->intervensi_kolaborasi_antipiretik_and_analgetik = $this->checkIsTrue($request->intervensi_kolaborasi_antipiretik_and_analgetik);
        $this->intervensi_kolaborasi_pemberian_preparat_besi = $this->checkIsTrue($request->intervensi_kolaborasi_pemberian_preparat_besi);
        $this->intervensi_kolaborasi_obat_emegensi = $this->checkIsTrue($request->intervensi_kolaborasi_obat_emegensi);

        $this->resep_hd = $request->resep_hd;
        $this->td = $request->td;
        $this->qb = $request->qb;
        $this->qd = $request->qd;
        $this->uf_goal = $request->uf_goal;
        $this->dialisat_bicarbonat = $this->checkIsTrue($request->dialisat_bicarbonat);
        $this->conductivity = $request->conductivity;
        $this->temperatur = $request->temperatur;

        $this->heparinisasi_standar = $this->checkIsTrue($request->heparinisasi_standar);
        $this->heparinisasi_mini = $this->checkIsTrue($request->heparinisasi_mini);
        $this->heparinisasi_free_heparin = $this->checkIsTrue($request->heparinisasi_free_heparin);
        $this->heparinisasi_lmwh = $this->checkIsTrue($request->heparinisasi_lmwh);

        if (!$this->save()){
            return 'Gagal manambah data';
        }
        return $this;
    }
}
