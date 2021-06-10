<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
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
        Type::truncate();
        DB::statement('set foreign_key_checks=1');

        // define date
        $types=[
            ['type'=>'comédien'],
            ['type'=>'scénographe'],
            ['type'=>'auteur'],
            ['type'=>'producteur'],
        ];

        //insert
        DB::table('types')->insert($types);
    }
}
