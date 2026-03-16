<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_comentario';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_usuario');
    }

    public function tarjeta()
    {
        return $this->belongsTo(Tarjeta::class, 'id_tarjeta', 'id_tarjeta');
    }
}
