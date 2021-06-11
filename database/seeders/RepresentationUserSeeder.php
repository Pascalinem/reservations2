<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use app\Models\Representation;
use app\Models\User;
use app\Models\RepresentationUser;

class RepresentationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table
        DB::statement('set foreign_key_checks=0');
        DB::table('representation_user')->truncate();
        DB::statement('set foreign_key_checks=1');

        // define the datas
        $representationUsers=[

            [
                'representation_id'=>'4',
                'user_id'=>'6',
                'places'=>5,
            ],
            [
                'representation_id'=>'4',
                'user_id'=>'10',
                'places'=>2,
            ],
            [
                'representation_id'=>'3',
                'user_id'=>'3',
                'places'=>1,
            ],
            [
                'representation_id'=>'1',
                'user_id'=>'8',
                'places'=>1,
            ],
        ];

        //insert
        DB::table('representation_user')->insert($representationUsers);
    }
}
