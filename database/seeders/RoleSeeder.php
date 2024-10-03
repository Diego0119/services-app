<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'Admin role'
            ],
            [
                'name' => 'Client',
                'slug' => 'client',
                'description' => 'Client role'
            ],
        ];


        // quizas exista un error porque la tabla es roles no role
        Role::insert($data);

    }
}

