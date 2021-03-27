<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        Role::truncate();
        
        //Define data
       $roles = [
            ['role'=>'administrateur'],
            ['role'=>'visiteur'],
            ['role'=>'propriétaire'],
            ['role'=>'représentateur'],
        ];
        
        //Insert data in the table
        foreach ($roles as $data) {     
            DB::table('roles')->insert([
                'role' => $data['role'],
            ]);
        }

    }
}
