<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    
    public function up()
    {
        Schema::create('tablero_usuario', function (Blueprint $table) {
            $table->id('id_tablero_usuario');
            $table->unsignedBigInteger('id_tablero');
            $table->unsignedBigInteger('id_usuario');
            $table->string('rol')->default('miembro');
            $table->timestamps();

            $table->foreign('id_tablero')->references('id_tableros')->on('tableros')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onDelete('cascade');
            $table->unique(['id_tablero', 'id_usuario']); // Evita duplicados
        });
    }
};