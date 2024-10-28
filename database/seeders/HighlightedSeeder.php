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
                'name' => 'Impulso',
                'slug' => 'impulso',
            ],
            [
                'name' => 'Matriz',
                'slug' => 'matriz',
            ],
        ];

        DB::table('highlighted')->insert($data);
    }
}
