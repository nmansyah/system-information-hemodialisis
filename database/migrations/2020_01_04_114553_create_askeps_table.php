<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAskepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('askeps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_rm')->unique();
            $table->bigInteger('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->bigInteger('perawat_id')->unsigned();
            $table->foreign('perawat_id')->references('id')->on('perawats')->onDelete('cascade');
            $table->date('tanggal_pemeriksaan');
            $table->string('sesi');
            $table->integer('hemodialisa_number');
            $table->string('dialiser_type');

            $table->boolean('keluhan_utama_sesak_nafas');
            $table->boolean('keluhan_utama_mual');
            $table->boolean('keluhan_utama_gatal');

            $table->string('keadaan_umum');
            $table->string('konjungtiva');

            $table->boolean('ekstrimitas_not_edema_or_dehidrasi');
            $table->boolean('ekstrimitas_dehidrasi');
            $table->boolean('ekstrimitas_edema');
            $table->boolean('ekstrimitas_edema_anasarka');
            $table->boolean('ekstrimitas_pucat_and_dingin');

            $table->float('berat_badan_kering');
            $table->float('berat_badan_pre_hd');
            $table->float('berat_badan_hd');

            $table->string('akses_vaskular');
            $table->string('hd_kateter');

            $table->string('pemeriksaan_penunjang')->nullable();

            $table->boolean('diagnosa_kelebihan_volume_cairan');
            $table->boolean('diagnosa_resiko_ketidakstabilan_tekanan_darah');
            $table->boolean('diagnosa_gangguan_keseimbangan_elektrolit');
            $table->boolean('diagnosa_resiko_ketidakstabilan_kadar_gula_darah');
            $table->boolean('diagnosa_resiko_infeksi');

            $table->boolean('intervensi_keperawatan_monitor_berat_badan');
            $table->boolean('intervensi_keperawatan_penkes');
            $table->boolean('intervensi_keperawatan_lakukan_akses_vaskular');
            $table->boolean('intervensi_keperawatan_lakukan_hd');
            $table->boolean('intervensi_keperawatan_monitor_infeksi');
            $table->boolean('intervensi_keperawatan_pasien_mulai_hipotensi');
            $table->boolean('intervensi_keperawatan_monitor_kompilasi');

            $table->boolean('intervensi_kolaborasi_program_hd');
            $table->boolean('intervensi_kolaborasi_transfusi_darah');
            $table->boolean('intervensi_kolaborasi_diit');
            $table->boolean('intervensi_kolaborasi_pemberian_ca_glukonas');
            $table->boolean('intervensi_kolaborasi_antibiotik');
            $table->boolean('intervensi_kolaborasi_antipiretik_and_analgetik');
            $table->boolean('intervensi_kolaborasi_pemberian_preparat_besi');
            $table->boolean('intervensi_kolaborasi_obat_emegensi');

            $table->string('resep_hd');

            $table->integer('td');
            $table->integer('qb');
            $table->integer('qd');
            $table->integer('uf_goal');

            $table->boolean('dialisat_bicarbonat');
            $table->float('conductivity');
            $table->float('temperatur');

            $table->boolean('heparinisasi_standar');
            $table->boolean('heparinisasi_mini');
            $table->boolean('heparinisasi_free_heparin');
            $table->boolean('heparinisasi_lmwh');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('askeps');
    }
}
