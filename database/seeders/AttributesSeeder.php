<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;


class AttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            ['name' => 'Dormitorios', 'type' => 'numeric'],
            ['name' => 'Baños', 'type' => 'numeric'],
            ['name' => 'Superficie del inmueble', 'type' => 'numeric'],
            ['name' => 'Año de construcción', 'type' => 'numeric'],
            ['name' => 'Gastos comunes', 'type' => 'numeric'],
            ['name' => 'Baño de visitas', 'type' => 'checkbox'],
            ['name' => 'Espacio de servicios', 'type' => 'checkbox'],
            ['name' => 'Terraza', 'type' => 'checkbox'],
            ['name' => 'Logia', 'type' => 'checkbox'],
            ['name' => 'Bodega', 'type' => 'checkbox'],
            ['name' => 'Cocina con despensa', 'type' => 'checkbox'],
            ['name' => 'Comedor', 'type' => 'checkbox'],
            ['name' => 'Cocina amoblada', 'type' => 'checkbox'],
            ['name' => 'Cocina con equipamiento', 'type' => 'checkbox'],
            ['name' => 'Piscina', 'type' => 'checkbox'],
            ['name' => 'Gimnasio', 'type' => 'checkbox'],
            ['name' => 'Aire acondicionado', 'type' => 'checkbox'],
            ['name' => 'Calefacción', 'type' => 'checkbox'],
            ['name' => 'Conserjería', 'type' => 'checkbox'],
            ['name' => 'Estacionamiento disponible', 'type' => 'checkbox'],
            ['name' => 'Antejardín', 'type' => 'checkbox'],
            ['name' => 'Patio exterior', 'type' => 'checkbox'],
            ['name' => 'Riego automático', 'type' => 'checkbox'],
            ['name' => 'Marca', 'type' => 'text'],
            ['name' => 'Modelo', 'type' => 'text'],
            ['name' => 'Versión', 'type' => 'text'],
            ['name' => 'Año', 'type' => 'numeric'],
            ['name' => 'Transmisión', 'type' => 'select'],
            ['name' => 'Combustible', 'type' => 'select'],
            ['name' => 'Kilometraje', 'type' => 'numeric'],
            ['name' => 'Tipo', 'type' => 'select'],
            ['name' => 'Estado', 'type' => 'select'],
            ['name' => 'Género', 'type' => 'select'],
            ['name' => 'Talla', 'type' => 'text'],
            ['name' => 'Estado', 'type' => 'select'],
            ['name' => 'Sala de reuniones', 'type' => 'checkbox'],
            ['name' => 'Espacio para oficina', 'type' => 'checkbox'],
            ['name' => 'Superficie de la habitación', 'type' => 'checkbox'],
            ['name' => 'Baño individual', 'type' => 'checkbox'],
            ['name' => 'Cocina compartida', 'type' => 'checkbox'],
            ['name' => 'Número de personas', 'type' => 'numeric']

        ];

        Attribute::insert($attributes);
    }
}
