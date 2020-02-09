<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCheckOutTimeToPasienRawatinaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasien_rawatinaps', function (Blueprint $table) {
            $table->timestamp('check_out_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasien_rawatinaps', function (Blueprint $table) {
            $table->dropColumn('check_out_time');
        });
    }
}
