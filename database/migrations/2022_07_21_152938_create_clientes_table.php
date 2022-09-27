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
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->integer('Cedula');
            $table->string('Correo')->unique();
            $table->integer('Edad');
            $table->integer('Telefono');
            //$table->integer('id')->unsigned();
            //$table->foreign('id')->references('id')->on('users');   
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
        Schema::dropIfExists('clientes');
    }
};
