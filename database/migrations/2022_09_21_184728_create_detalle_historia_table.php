<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_historia', function (Blueprint $table) {
            $table->increments('idNotas');
            $table->string('Responsable');
            $table->dateTime('Fecha');
            $table->string('Observaciones');
            $table->integer('idHistoria')->unsigned();
            $table->foreign('idHistoria')->references('idHistoria')->on('historia_clinica');
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
        Schema::dropIfExists('detalle_historia');
    }
};
