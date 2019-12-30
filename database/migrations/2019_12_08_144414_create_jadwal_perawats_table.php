<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPerawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_perawats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('bulan');
            $table->string('hari1');
            $table->string('hari2');
            $table->string('hari3');
            $table->string('hari4');
            $table->string('hari5');
            $table->string('hari6');
            $table->unsignedBigInteger('perawat_id');
            $table->foreign('perawat_id')->references('id')->on('perawats')->onDelete('cascade');
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
        Schema::dropIfExists('jadwal_perawats');
    }
}
