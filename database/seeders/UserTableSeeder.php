<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use DB;

class UserTableSeeder extends Seeder
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

        User::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');  //activation "" ""

        //Define data
        $users = [
            [
                'email' => 'pierre@hotmail.com',
                'password' => 'mypass',
                'login' => 'pierre99',
                'firstname' => 'Pierre',
                'lastname' => 'Dupont',
                'langue' => 'Français',
            ],
            [
                'email' => 'benoit@hotmail.com',
                'password' => 'mypass2',
                'login' => 'benoit99',
                'firstname' => 'Benoit',
                'lastname' => 'Dupond',
                'langue' => 'Anglais',
            ],
        ];

        //Insert data in the table
        foreach ($users as $data) {     
            DB::table('users')->insert([
                'email' => $data['email'],
                'password' => $data['password'],
                'login' => $data['login'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'langue' => $data['langue'],
            ]);
        }
    }
}
