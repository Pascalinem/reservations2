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
        DB::statement('set foreign_key_checks=0');
        Locality::truncate();
        DB::statement('set foreign_key_checks=1');
 //define data
       $localities=[
           ['postal_code'=>'1000','locality'=>'Bruxelles'],
           ['postal_code'=>'1170','locality'=>'Watermael-Boitsfort'],

       ];

        //insert
       DB::table('localities')->insert($localities);
       
    }
}
