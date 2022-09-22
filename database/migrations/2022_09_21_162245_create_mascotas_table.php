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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('idMascota');
            $table->string('Nombre');
            $table->string('Raza');
            $table->string('Color');
            $table->integer('Peso');
            $table->string('Especie');
            $table->integer('Edad');
            $table->string('Sexo');
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
        Schema::dropIfExists('mascotas');
    }
};
