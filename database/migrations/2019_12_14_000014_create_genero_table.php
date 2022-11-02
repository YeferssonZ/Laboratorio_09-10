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
        Schema::create('genero', function (Blueprint $table) {
            $table->id();         
            $table->string('tipo_genero');
            $table->string('nombre');
            $table->unsignedBigInteger('canciones_id');
            $table->foreign('canciones_id')->references('id')->on('canciones');
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
        Schema::dropIfExists('genero');
    }
};
