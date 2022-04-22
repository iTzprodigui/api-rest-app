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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres');
            $table->string('ApellidoPa');
            $table->string('ApellidoMa');
            $table->integer('Matricula');
            $table->string('Contrasena');
            $table->integer('Grado');
            $table->string('Grupo');
            $table->string('Ciclo_Escolar');
            $table->string('Foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
