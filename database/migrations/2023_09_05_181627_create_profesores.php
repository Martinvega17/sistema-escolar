<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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
            $table->unsignedBigInteger('materia_id'); // Materia que imparte el profesor
            $table->foreign('materia_id')
                ->references('id')->on('materias')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesores');
    }
};
