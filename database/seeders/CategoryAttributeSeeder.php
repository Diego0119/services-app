<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class CategoryAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // departamento
            ['category_id' => 1, 'attribute_id' => 1],
            ['category_id' => 1, 'attribute_id' => 2],
            ['category_id' => 1, 'attribute_id' => 3],
            ['category_id' => 1, 'attribute_id' => 4],
            ['category_id' => 1, 'attribute_id' => 5],
            ['category_id' => 1, 'attribute_id' => 6],
            ['category_id' => 1, 'attribute_id' => 7],
            ['category_id' => 1, 'attribute_id' => 8],
            ['category_id' => 1, 'attribute_id' => 9],
            ['category_id' => 1, 'attribute_id' => 10],
            ['category_id' => 1, 'attribute_id' => 11],
            ['category_id' => 1, 'attribute_id' => 12],
            ['category_id' => 1, 'attribute_id' => 13],
            ['category_id' => 1, 'attribute_id' => 14],
            ['category_id' => 1, 'attribute_id' => 15],
            ['category_id' => 1, 'attribute_id' => 16],
            ['category_id' => 1, 'attribute_id' => 17],
            ['category_id' => 1, 'attribute_id' => 18],
            ['category_id' => 1, 'attribute_id' => 18],
            ['category_id' => 1, 'attribute_id' => 19],
            ['category_id' => 1, 'attribute_id' => 20],

            // casa
            ['category_id' => 2, 'attribute_id' => 1],
            ['category_id' => 2, 'attribute_id' => 2],
            ['category_id' => 2, 'attribute_id' => 3],
            ['category_id' => 2, 'attribute_id' => 4],
            ['category_id' => 2, 'attribute_id' => 5],
            ['category_id' => 2, 'attribute_id' => 6],
            ['category_id' => 2, 'attribute_id' => 7],
            ['category_id' => 2, 'attribute_id' => 8],
            ['category_id' => 2, 'attribute_id' => 9],
            ['category_id' => 2, 'attribute_id' => 10],
            ['category_id' => 2, 'attribute_id' => 11],
            ['category_id' => 2, 'attribute_id' => 12],
            ['category_id' => 2, 'attribute_id' => 13],
            ['category_id' => 2, 'attribute_id' => 14],
            ['category_id' => 2, 'attribute_id' => 15],
            ['category_id' => 2, 'attribute_id' => 16],
            ['category_id' => 2, 'attribute_id' => 17],
            ['category_id' => 2, 'attribute_id' => 18],
            ['category_id' => 2, 'attribute_id' => 19],
            ['category_id' => 2, 'attribute_id' => 20],
            ['category_id' => 2, 'attribute_id' => 21],
            ['category_id' => 2, 'attribute_id' => 22],
            ['category_id' => 2, 'attribute_id' => 23],

            // oficina
            ['category_id' => 3, 'attribute_id' => 2],
            ['category_id' => 3, 'attribute_id' => 3],
            ['category_id' => 3, 'attribute_id' => 5],
            ['category_id' => 3, 'attribute_id' => 11],
            ['category_id' => 3, 'attribute_id' => 17],
            ['category_id' => 3, 'attribute_id' => 18],
            ['category_id' => 3, 'attribute_id' => 20],
            ['category_id' => 3, 'attribute_id' => 36],

            //almacenamiento y bodega
            ['category_id' => 4, 'attribute_id' => 3],
            ['category_id' => 4, 'attribute_id' => 37],
            ['category_id' => 4, 'attribute_id' => 17],
            ['category_id' => 4, 'attribute_id' => 20],
            ['category_id' => 4, 'attribute_id' => 2],

            //habitacion
            ['category_id' => 5, 'attribute_id' => 38],
            ['category_id' => 5, 'attribute_id' => 5],
            ['category_id' => 5, 'attribute_id' => 39],
            ['category_id' => 5, 'attribute_id' => 40],
            ['category_id' => 5, 'attribute_id' => 17],
            ['category_id' => 5, 'attribute_id' => 18],
            ['category_id' => 5, 'attribute_id' => 20],


            //quincho
            ['category_id' => 6, 'attribute_id' => 41],
            ['category_id' => 6, 'attribute_id' => 2],
            ['category_id' => 6, 'attribute_id' => 14],
            ['category_id' => 6, 'attribute_id' => 17],
            ['category_id' => 6, 'attribute_id' => 18],

            //vehiculos
            ['category_id' => 7, 'attribute_id' => 24],
            ['category_id' => 7, 'attribute_id' => 25],
            ['category_id' => 7, 'attribute_id' => 26],
            ['category_id' => 7, 'attribute_id' => 27],
            ['category_id' => 7, 'attribute_id' => 28],
            ['category_id' => 7, 'attribute_id' => 29],
            ['category_id' => 7, 'attribute_id' => 30],
            ['category_id' => 7, 'attribute_id' => 31],

            //ropa
            ['category_id' => 9, 'attribute_id' => 31],
            ['category_id' => 9, 'attribute_id' => 32],
            ['category_id' => 9, 'attribute_id' => 33],
            ['category_id' => 9, 'attribute_id' => 34],

            //electronica sin caracteristicas especiales

            //muebles sin caracteristicas especiales

            //servicios sin caracteristicas especiales

            //instrumentos musicales sin caracteristicas especiales

            //construccion musicales sin caracteristicas especiales

            //hobbies y deportes sin caracteristicas especiales

            //otros sin caracteristicas especiales

        ];
        DB::table('category_attribute')->insert($data);
    }
}
