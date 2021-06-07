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
        Type::truncate();
    }
}
