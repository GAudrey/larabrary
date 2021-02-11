<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersmissionTableSeeder extends Seeder
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
                'title' => 'user_access',
            ],
            [
                'id' => 1,
                'title' => 'book_access',
            ],
        ];

        Permission::insert($permission);
    }
}
