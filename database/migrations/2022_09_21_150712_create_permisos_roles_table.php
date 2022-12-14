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
        Schema::create('permisos_roles', function (Blueprint $table) {
            $table->increments('idPermisoRol');
            $table->integer('idRol')->unsigned();
            $table->foreign('idRol')->references('idRol')->on('roles');
            $table->integer('idPermiso')->unsigned();
            $table->foreign('idPermiso')->references('idPermiso')->on('permisos'); 
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
        Schema::dropIfExists('permisos_roles');
    }
};
