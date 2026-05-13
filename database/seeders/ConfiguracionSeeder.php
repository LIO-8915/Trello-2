<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Configuracion;

class ConfiguracionSeeder extends Seeder
{
    public function run()
    {
        $configs = [
            [
                'clave' => 'sitio_nombre',
                'valor' => 'Mi Trello',
                'descripcion' => 'Nombre del sitio',
                'tipo' => 'text'
            ],
            [
                'clave' => 'limite_tableros_usuario',
                'valor' => '10',
                'descripcion' => 'Máximo de tableros por usuario',
                'tipo' => 'number'
            ],
            [
                'clave' => 'modo_mantenimiento',
                'valor' => '0',
                'descripcion' => 'Activar modo mantenimiento',
                'tipo' => 'boolean'
            ],
        ];

        foreach ($configs as $config) {
            Configuracion::updateOrCreate(
                ['clave' => $config['clave']],
                $config
            );
        }
    }
}