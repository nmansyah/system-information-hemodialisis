<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('bulan');
            $table->integer('minggu');
            $table->string('nama');
            $table->time('hari1');
            $table->time('hari2');
            $table->time('hari3');
            $table->time('hari4');
            $table->time('hari5');
            $table->time('hari6');
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
        Schema::dropIfExists('jadwal_admins');
    }
}
