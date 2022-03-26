<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@prueba.es',
            'password' => bcrypt('admin123')
        ])->assignRole('admin');

        User::create([
            'name' => 'User',
            'email' => 'user@prueba.es',
            'password' => bcrypt('user1234')
        ])->assignRole('user');

        // User::factory(9)->create();
    }
}
