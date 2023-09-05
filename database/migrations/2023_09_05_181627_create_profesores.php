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
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('cedula');
            $table->integer('experiencia');
            $table->date('fecha_contratacion');

            $table->unsignedInteger('carrera_id')->references('id')->on('carreras')->onDelete('cascade')->nullable();
            $table->unsignedInteger('materia_id')->references('id')->on('materias')->onDelete('cascade')->nullable();

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
        Schema::dropIfExists('profesores');
    }
};
