<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Equipo;

use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tag;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Storage::deleteDirectory('clubs');
        //Storage::makeDirectory('clubs');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClubSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(JugadorSeeder::class);
        $this->call(PartidoSeeder::class);
    }
}
