<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->id('id_configuracion');
            $table->string('clave')->unique();
            $table->text('valor')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('tipo')->default('text');
            $table->timestamps();
        });
    }
};