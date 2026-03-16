<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
          $table->id('id_comentario');
          $table->text('texto');
          $table->dateTime('fecha');
          $table->foreignId('id_tarjeta')->constrained('tarjetas', 'id_tarjeta');
          $table->foreignId('user_id')->constrained('users', 'id_usuario');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
