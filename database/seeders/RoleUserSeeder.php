<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use app\Models\User;
use app\Models\Role;
use app\Models\RoleUser;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty the table first
        DB::statement('set foreign_key_checks=0');
        DB::table('role_user')->truncate();
        DB::statement('set foreign_key_checks=1');

        // Define the data
        $roleUsers=[
            [
                'role_id'=>1,'user_id'=>1
            ],
            [
                'role_id'=>1,'user_id'=>2
            ],
            [
                'role_id'=>2,'user_id'=>1
            ],
            [
                'role_id'=>3,'user_id'=>7
            ],

        ];

        //insert
        DB::table('role_user')->insert($roleUsers);

    }
}
