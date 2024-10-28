<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Departamento'],
            ['name' => 'Casa'],
            ['name' => 'Oficina'],
            ['name' => 'Almacenamiento y bodega'],
            ['name' => 'Habitación'],
            ['name' => 'Quincho'],
            ['name' => 'Vehículos'],
            ['name' => 'Electrónica'],
            ['name' => 'Ropa'],
            ['name' => 'Muebles'],
            ['name' => 'Servicios'],
            ['name' => 'Instrumentos Musicales'],
            ['name' => 'Construcción'],
            ['name' => 'Hobbies y Deportes'],
            ['name' => 'Otros'],

        ];
        Category::insert($data);
    }
}


