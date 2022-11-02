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
        Schema::create('album', function (Blueprint $table) {  
            $table->id();         
            $table->string('nombre');
            $table->date('fecha_lanzamiento');
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
        Schema::dropIfExists('album');
    }
};
