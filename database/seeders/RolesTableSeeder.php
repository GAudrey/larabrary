<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'id' => 1,
                'title' => 'Admin',
            ],
            [
                'id' => 1,
                'title' => 'User',
            ],
        ];
    }
}
