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
        Schema::create('historia_clinica', function (Blueprint $table) {
            $table->increments('idHistoria');
            $table->date('Fecha');
            $table->string('Diagnostico');
            $table->string('Tratamiento');
            $table->integer('Medicamentos');
            $table->string('Motivo de consulta');
            $table->integer('Dieta');
            $table->boolean('Vacunacion');
            $table->boolean('Desparacitacion');
            $table->boolean('Estado Reproductivo');
            $table->float('Peso');
            $table->string('Mucosas');
            $table->string('Turgencia');
            $table->float('Pulso');
            $table->string('Otros');
            $table->string('Anamnesis');
            $table->string('Enfermedades o procedimientos anteriores');
            $table->string('Lista Problemas');
            $table->string('Diagnosticos diferenciales');
            $table->string('Plan diagnostico');
            $table->string('Diagnostico presuntivo');
            $table->string('Diagnostico definitivo');
            $table->string('Pronostico');
            $table->string('Plan terapeutico');
            $table->string('Observaciones');
            $table->string('Tratamiento al diagnostico');
            $table->boolean('Estado');
            $table->boolean('Actitud');
            $table->boolean('Hidratacion');
            $table->boolean('Estado nutricional');
            $table->boolean('Modulos superficiales');
            $table->boolean('Sistema cardiovascular');
            $table->boolean('Sistema respiratorio');
            $table->boolean('Sistema digestivo');
            $table->boolean('Sistema reproductivo');
            $table->boolean('Sistema urinario');
            $table->boolean('Sistema nervioso');
            $table->boolean('Sistema musculo-esqueletico');
            $table->boolean('Ojos');
            $table->boolean('Piel y Anexos');
            $table->integer('idMascota')->unsigned();
            $table->foreign('idMascota')->references('idMascota')->on('mascotas'); 
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
        Schema::dropIfExists('historia_clinica');
    }
};
