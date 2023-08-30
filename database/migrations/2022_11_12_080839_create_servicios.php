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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
       /*      $table->foreignId('piscina_id')->constrained('piscina');
            $table->foreignId('bar_id')->constrained('bar');
            $table->foreignId('restaurante_id')->constrained('restaurante');
            $table->foreignId('huespedes_id')->constrained('huespedes'); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};
