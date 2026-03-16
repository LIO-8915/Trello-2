<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_listas';

    public function tablero()
    {
        return $this->belongsTo(Tablero::class, 'id_tableros', 'id_tableros');
    }

    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class, 'id_listas', 'id_listas');
    }
}
