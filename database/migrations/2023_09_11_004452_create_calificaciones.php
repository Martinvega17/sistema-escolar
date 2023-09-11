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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->float('calificacion');

            $table->unsignedBigInteger('alumno_id'); // Alumno a la que pertenece la calificacion
            $table->foreign('alumno_id')
                ->references('id')->on('alumnos')
                ->onDelete('cascade');

            $table->unsignedBigInteger('materia_id'); // Materia a la que pertenece la calificacion
            $table->foreign('materia_id')
                ->references('id')->on('materias')
                ->onDelete('cascade');

            $table->unsignedBigInteger('profesor_id'); // Profesor a la que pertenece la calificacion
            $table->foreign('profesor_id')
                ->references('id')->on('profesores')
                ->onDelete('cascade');

            $table->unsignedBigInteger('carrera_id'); // Carrera a la que pertenece la calificacion
            $table->foreign('carrera_id')
                ->references('id')->on('carreras')
                ->onDelete('cascade');


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
        Schema::dropIfExists('calificaciones');
    }
};
