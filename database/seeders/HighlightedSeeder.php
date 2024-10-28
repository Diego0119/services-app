<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HighlightedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Default',
                'slug' => 'default',
            ],
            [
                'name' => 'Impulso',
                'slug' => 'impulso',
            ],
            [
                'name' => 'Matriz',
                'slug' => 'matriz',
            ],
        ];
    }
}
