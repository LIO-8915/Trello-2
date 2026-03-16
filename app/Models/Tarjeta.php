<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_tarjeta';

public function lista()
{
    return $this->belongsTo(Lista::class, 'id_listas', 'id_listas');
}

public function comentarios()
{
    return $this->hasMany(Comentario::class, 'id_tarjeta', 'id_tarjeta');
}

public function etiquetas()
{
    
    return $this->belongsToMany(Etiqueta::class, 'etiqueta_tarjeta', 'id_tarjeta', 'id_etiqueta');
}
}
