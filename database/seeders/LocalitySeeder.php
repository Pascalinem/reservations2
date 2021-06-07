<?php

namespace Database\Seeders;

use App\Models\Locality;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //empty table first
        Locality::truncate();

        //define data
        $localities=[
            ['postal_code'=>'1000','locality'=>'Bruxelles'],

        ];

        //insert
        DB::table('localities')->insert($localities);

    }
}
