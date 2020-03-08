<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToPerpindahanJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perpindahan_jadwals', function (Blueprint $table) {
            $table->string('old_day');
            $table->string('old_session');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perpindahan_jadwals', function (Blueprint $table) {
            $table->dropColumn('old_day');
            $table->dropColumn('old_session');
        });
    }
}
