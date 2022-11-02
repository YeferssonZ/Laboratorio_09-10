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
        Schema::create('canciones', function (Blueprint $table) {
            $table->id();         
            $table->string('nombre');
            $table->unsignedBigInteger('artistas_id');
            $table->foreign('artistas_id')->references('id')->on('artistas');
            $table->date('Fecha de lanzamiento');
            $table->string('tipo_genero');
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
        Schema::dropIfExists('canciones');
    }
};
