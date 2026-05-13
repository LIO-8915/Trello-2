<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;

    protected $table = 'configuraciones';
    protected $primaryKey = 'id_configuracion';
    public $timestamps = true;

    protected $fillable = [
        'clave',
        'valor',
        'descripcion',
        'tipo', // ej: 'text', 'boolean', 'number'
    ];

    /**
     * Obtener un valor de configuración por su clave.
     */
    public static function get(string $clave, $default = null)
    {
        $config = self::where('clave', $clave)->first();
        return $config ? $config->valor : $default;
    }
}