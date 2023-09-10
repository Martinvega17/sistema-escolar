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
            $table->id();
            $table->text('nombre');
            $table->text('email');
            $table->text('matricula');
            $table->text('direccion');
            $table->text('telefono');
            $table->text('semestre');
            $table->text('fecha_nacimiento');
            $table->text('sexo');
            $table->text('edad');
            $table->text('curp');
            $table->text('fecha_ingreso');
            $table->text('estatus');
            $table->text('observaciones');
            $table->text('foto');
            
            $table->unsignedBigInteger('carrera_id'); // Carrera a la que pertenece el alumno
            $table->foreign('carrera_id')
                ->references('id')->on('carreras')
                ->onDelete('cascade');

            $table->unsignedBigInteger('materia_id'); // Materia a la que pertenece el alumno
            $table->foreign('materia_id')
                ->references('id')->on('materias')
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
        Schema::dropIfExists('alumnos');
    }
};
