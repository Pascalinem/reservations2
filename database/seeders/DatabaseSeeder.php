<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Location;
use App\Models\Locality;
use App\Models\Role;
use App\Models\Type;
use app\Models\Show;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ArtistSeeder::class,
            LocalitySeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            LocationSeeder::class,
            ShowSeeder::class,

        ]);
    }
}
