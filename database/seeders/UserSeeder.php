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
            'name' => 'Inma Guerrero',
            'email' => 'inma@guerrero.com',
            'password' => bcrypt('1234abc')
        ])->assignRole('admin');

        User::create([
            'name' => 'Alberto Lozano',
            'email' => 'alozanow@tequiero.com',
            'password' => bcrypt('1234abc')
        ])->assignRole('user');

        // User::factory(9)->create();
    }
}
