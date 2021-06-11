<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty table first
        DB::statement('set foreign_key_checks=0');
        User::truncate();
        DB::statement('set foreign_key_checks=1');


        //
        User::factory()->count(10)->create();
    }
}
