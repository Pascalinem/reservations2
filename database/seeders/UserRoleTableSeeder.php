<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;
use DB;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');  //desactive vérification contraintes clés étrangères

        DB::table('role_user')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');  //activation "" ""

        //Define data
        $usersRole = [
            [
                'email' => 'pierre@hotmail.com',
                'password' => 'mypass',
                'login' => 'pierre99',
                'firstname' => 'Pierre',
                'lastname' => 'Dupont',
                'langue' => 'Français',
                'role' => 'administrateur',
            ],
            [
                'email' => 'benoit@hotmail.com',
                'password' => 'mypass2',
                'login' => 'benoit99',
                'firstname' => 'Benoit',
                'lastname' => 'Dupond',
                'langue' => 'Anglais',
                'role' => 'propriétaire',
            ],
        ];

        //Insert data in the table
        foreach ($usersRole as $data) {
            $user = User::where([
                ['login','=',$data['login'] ]
            ])->first();
            $role = Role::firstWhere('role',$data['role']);
            
            DB::table('role_user')->insert([
                'user_id' => $user->id,
                'role_id' => $role->id,
            ]);
        }

    }
}
