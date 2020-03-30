<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHidroStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hidro_stations', function (Blueprint $table) {
            $table->id();
            $table->string('nameStation');
            $table->bigInteger('idStation');
            $table->string('river')->nullable();
            $table->float('preAlertLevel');
            $table->float('alertLevel');
            $table->float('floodLevel');
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
        Schema::dropIfExists('hidro_stations');
    }
}
