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
            // Inmuebles - Departamento
            ['category_id' => 1, 'name' => 'Dormitorios', 'type' => 'numeric'],
            ['category_id' => 1, 'name' => 'Baños', 'type' => 'numeric'],
            ['category_id' => 1, 'name' => 'Superficie del inmueble', 'type' => 'numeric'],
            ['category_id' => 1, 'name' => 'Año de construcción', 'type' => 'numeric'],
            ['category_id' => 1, 'name' => 'Gastos comunes', 'type' => 'numeric'],
            ['category_id' => 1, 'name' => 'Baño de visitas', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Espacio de servicios', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Terraza', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Logia', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Cocina con despensa', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Cocina amoblada', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Piscina', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Gimnasio', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Aire acondicionado', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Calefacción', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Conserjería', 'type' => 'checkbox'],
            ['category_id' => 1, 'name' => 'Estacionamiento disponible', 'type' => 'checkbox'],

            // Inmuebles - Casa
            ['category_id' => 2, 'name' => 'Dormitorios', 'type' => 'numeric'],
            ['category_id' => 2, 'name' => 'Baños', 'type' => 'numeric'],
            ['category_id' => 2, 'name' => 'Superficie del inmueble', 'type' => 'numeric'],
            ['category_id' => 2, 'name' => 'Año de construcción', 'type' => 'numeric'],
            ['category_id' => 2, 'name' => 'Gastos comunes', 'type' => 'numeric'],
            ['category_id' => 2, 'name' => 'Antejardín', 'type' => 'checkbox'],
            ['category_id' => 2, 'name' => 'Patio exterior', 'type' => 'checkbox'],
            ['category_id' => 2, 'name' => 'Riego automático', 'type' => 'checkbox'],

            // Vehículos
            ['category_id' => 3, 'name' => 'Marca', 'type' => 'text'],
            ['category_id' => 3, 'name' => 'Modelo', 'type' => 'text'],
            ['category_id' => 3, 'name' => 'Versión', 'type' => 'text'],
            ['category_id' => 3, 'name' => 'Año', 'type' => 'numeric'],
            ['category_id' => 3, 'name' => 'Transmisión', 'type' => 'select'], // mecánico o automático
            ['category_id' => 3, 'name' => 'Combustible', 'type' => 'select'], // diésel, bencina, gas, eléctrico, híbrido
            ['category_id' => 3, 'name' => 'Kilometraje', 'type' => 'numeric'],

            // Vestuario
            ['category_id' => 4, 'name' => 'Tipo', 'type' => 'select'], // Traje, Vestido, Disfraz, etc.
            ['category_id' => 4, 'name' => 'Estado', 'type' => 'select'], // Nuevo, Usado
            ['category_id' => 4, 'name' => 'Género', 'type' => 'select'], // Masculino, Femenino, etc.
            ['category_id' => 4, 'name' => 'Talla', 'type' => 'text'],

            // Instrumentos Musicales
            ['category_id' => 5, 'name' => 'Estado', 'type' => 'select'], // Nuevo, Usado

            // Computación y Electrónica
            ['category_id' => 6, 'name' => 'Estado', 'type' => 'select'], // Nuevo, Usado

            // Otros artículos
            ['category_id' => 7, 'name' => 'Estado', 'type' => 'select'], // Nuevo, Usado
        ];

        Attribute::insert($attributes);
    }
}
