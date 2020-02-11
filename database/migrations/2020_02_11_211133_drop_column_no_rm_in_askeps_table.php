<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnNoRmInAskepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('askeps', function (Blueprint $table) {
            $table->dropColumn('no_rm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('askeps', function (Blueprint $table) {
            $table->integer('no_rm')->unique();
        });
    }
}
