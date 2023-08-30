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
        Schema::create('huespedes', function (Blueprint $table) {
                $table->id();
                $table->string('nombres');
                $table->string('cedula')->unique();
                $table->string('direccion');
                $table->string('celular')->unique();
                $table->string('email')->unique();
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
        Schema::dropIfExists('huespedes');
    }
};
