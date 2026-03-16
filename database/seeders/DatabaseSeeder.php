<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Espacio;
use App\Models\Tablero;
use App\Models\Lista;
use App\Models\Tarjeta;
use App\Models\Etiqueta;
use App\Models\Comentario;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        User::factory(10)->create();

      
        Espacio::factory(5)->create();

     
        Etiqueta::factory(10)->create();

        
        Tablero::factory(10)->create();

        
        Lista::factory(20)->create();

      
        Tarjeta::factory(50)->create();

      
        Comentario::factory(100)->create();

        //Poblar relaciones Muchos a Muchos (Pivotes)
        $this->seedIntermedias();
    }

    private function seedIntermedias()
    {
        // Relación Usuario - Espacio
        $usuarios = User::all();
        Espacio::all()->each(function ($espacio) use ($usuarios) {
            $espacio->usuarios()->attach(
                $usuarios->random(rand(1, 3))->pluck('id_usuario')
            );
        });

        // Relación Tarjeta - Etiqueta
        $etiquetas = Etiqueta::all();
        Tarjeta::all()->each(function ($tarjeta) use ($etiquetas) {
            $tarjeta->etiquetas()->attach(
                $etiquetas->random(rand(1, 2))->pluck('id_etiqueta')
            );
        });
    }
}
