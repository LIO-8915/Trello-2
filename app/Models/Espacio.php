<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_espacio';

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'espacio_usuario', 'id_espacio', 'id_usuario');
    }

    public function tableros()
    {
        return $this->hasMany(Tablero::class, 'id_espacio', 'id_espacio');
    }
}
