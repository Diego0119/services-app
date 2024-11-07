<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

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
                'name' => 'Remontar',
                'slug' => 'remontar',
            ],
            [
                'name' => 'Galería',
                'slug' => 'galería',
            ],
        ];

        DB::table('highlighted')->insert($data);
    }
}
