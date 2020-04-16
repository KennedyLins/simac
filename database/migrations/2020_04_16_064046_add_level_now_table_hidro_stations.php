<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLevelNowTableHidroStations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hidro_stations', function (Blueprint $table) {
            $table->string('levelNow')->nullable()->after('river');
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
            $table->dropColumn('levelNow');
        });
    }
}
