<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataHoraTableHidroStations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hidro_stations', function (Blueprint $table) {
            $table->string('dataColeta')->nullable()->after('river');
            $table->string('horaColeta')->nullable()->after('dataColeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hidro_stations', function (Blueprint $table) {
            $table->dropColumn('dataColeta');
            $table->dropColumn('horaColeta');
        });
    }
}
