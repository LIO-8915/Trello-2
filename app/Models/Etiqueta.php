<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_etiqueta';

    public function tarjetas()
    {
        return $this->belongsToMany(Tarjeta::class, 'etiqueta_tarjeta', 'id_etiqueta', 'id_tarjeta');
    }
}
