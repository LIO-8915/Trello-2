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
        Schema::create('tarjetas', function (Blueprint $table) {
           $table->id('id_tarjeta');
           $table->string('titulo', 100);
           $table->text('descripcion')->nullable();
           $table->foreignId('id_listas')->constrained('listas', 'id_listas');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjetas');
    }
};
