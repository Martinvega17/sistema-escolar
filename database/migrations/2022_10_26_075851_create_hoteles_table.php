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
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('rfc')->unique();
            $table->string('direccion');
            $table->string('celular')->unique();
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->string('url_facebook')->nullable();
            $table->string('url_whatsapp')->nullable();
            $table->time('apertura');
            $table->time('cierre');
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
        Schema::dropIfExists('hoteles');
    }
};
