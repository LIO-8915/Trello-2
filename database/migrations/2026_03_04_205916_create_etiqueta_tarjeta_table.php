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
        Schema::create('etiqueta_tarjeta', function (Blueprint $table) {
        $table->id();
        
       
        $table->foreignId('id_tarjeta')->constrained('tarjetas', 'id_tarjeta')->onDelete('cascade');
        
     
        $table->foreignId('id_etiqueta')->constrained('etiquetas', 'id_etiqueta')->onDelete('cascade');
        
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_tarjeta');
    }
};
