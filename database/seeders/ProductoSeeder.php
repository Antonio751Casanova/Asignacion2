<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto; 

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Producto::create([
            'nombre' => 'Laptop Gamer',
            'descripcion' => 'Una computadora potente para juegos y desarrollo.',
            'precio' => 1500.00
        ]);

        
        Producto::create([
            'nombre' => 'Cafetera Inteligente',
            'descripcion' => 'Prepara café automáticamente desde tu celular.',
            'precio' => 89.99
        ]);

        
        Producto::create([
            'nombre' => 'Auriculares Cancelación Ruido',
            'descripcion' => 'Aíslate del mundo con la mejor calidad de sonido.',
            'precio' => 250.50
        ]);
        
        
        Producto::create([
            'nombre' => 'Monitor 4K',
            'descripcion' => 'Pantalla ultra HD de 27 pulgadas.',
            'precio' => 320.00
        ]);
    }
}