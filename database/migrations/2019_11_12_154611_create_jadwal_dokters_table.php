<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_dokters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('bulan');
            $table->string('nama');
            $table->time('hari1');
            $table->time('hari2');
            $table->time('hari3');
            $table->time('hari4');
            $table->time('hari5');
            $table->time('hari6');
            $table->unsignedBigInteger('dokter_id');
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
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
        Schema::dropIfExists('jadwal_dokters');
    }
}
