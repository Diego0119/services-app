<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Región de Arica y Parinacota'],
            ['name' => 'Región de Tarapacá'],
            ['name' => 'Región de Antofagasta'],
            ['name' => 'Región de Atacama'],
            ['name' => 'Región de Coquimbo'],
            ['name' => 'Región de Valparaíso'],
            ['name' => 'Región Metropolitana'],
            ['name' => 'Región del Libertador General Bernardo O\'Higgins'],
            ['name' => 'Región del Maule'],
            ['name' => 'Región de Ñuble'],
            ['name' => 'Región del Biobío'],
            ['name' => 'Región de La Araucanía'],
            ['name' => 'Región de Los Rios'],
            ['name' => 'Regiónn de Los Lagos'],
            ['name' => 'Región de Aysén'],
            ['name' => 'Región de Magallanes'],


        ];

        Region::insert($data);
    }
}
