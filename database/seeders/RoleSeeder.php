<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
        Role::truncate();
        DB::statement('set foreign_key_checks=1');

        //define data
        $roles=[
            ['role'=>'Visiteur'],
            ['role'=>'Membre'],
            ['role'=>'Admin'],
        ];


        //insert
        DB::table('roles')->insert($roles);
    
    }
}
