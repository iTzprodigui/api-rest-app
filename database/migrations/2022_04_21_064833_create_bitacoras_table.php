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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDocente')->unsigned();
            $table->integer('idAlumno')->unsigned();
            $table->date('fecha');
            $table->string('anotacion');
            $table->foreign('idDocente')->references('id')->on('docentes')->onDelate('cascade');
            $table->foreign('idAlumno')->references('id')->on('alumnos')->onDelate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacoras');
    }
};
