<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('codigo')->unique();
            $table->integer('creditos')->nullable();
            $table->string('descripcion');
            $table->unsignedBigInteger('carrera_id'); // Carrera a la que pertenece la materia
            $table->foreign('carrera_id')
                ->references('id')->on('carreras')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('materias');
    }
};
