<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableroUsuario extends Model
{
    use HasFactory;

    protected $table = 'tablero_usuario';
    protected $primaryKey = 'id_tablero_usuario';
    public $timestamps = true;

    protected $fillable = [
        'id_tablero',
        'id_usuario',
        'rol', // ej: 'admin', 'miembro', 'observador'
    ];

    /**
     * Relación con el tablero.
     */
    public function tablero()
    {
        return $this->belongsTo(Tablero::class, 'id_tablero', 'id_tableros');
    }

    /**
     * Relación con el usuario.
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }
}