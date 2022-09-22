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
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('idCitas');
            $table->string('Estado');
            $table->date('Fecha');
            $table->time('Hora');
            $table->string('Nombre');
            $table->integer('idServicio')->unsigned();
            $table->foreign('idServicio')->references('idServicio')->on('servicios');
            $table->integer('idCliente')->unsigned();
            $table->foreign('idCliente')->references('idCliente')->on('clientes');  
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
        Schema::dropIfExists('citas');
    }
};
