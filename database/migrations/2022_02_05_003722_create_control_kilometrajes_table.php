<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlKilometrajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_kilometrajes', function (Blueprint $table) {
            $table->id();
            $table->integer('vehiculo_ids');
            $table->string('tipo_vehi');
            $table->integer('km_actuales');
            $table->integer('contador');
            $table->integer('limite');
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
        Schema::dropIfExists('control_kilometrajes');
    }
}
