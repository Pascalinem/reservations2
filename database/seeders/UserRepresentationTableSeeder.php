<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Representation;
use App\Models\User;
use App\Models\Show;
use App\Models\Location;
use DB;

class UserRepresentationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('user_representation')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
        $representations_users = [
            [
                'show_slug'=>'ayiti',
                'location_slug'=>'espace-delvaux-la-venerie',
                'login' => 'pierre99',
                'places' => 5,
            ],
            [
                'show_slug'=>'ayiti',
                'location_slug'=>'dexia-art-center',                
                'login' => 'pierre99',
                'places' => 7,
            ],
            [
                'show_slug'=>'cible-mouvante',
                'location_slug'=>null,
                'login' => 'benoit99',
                'places' => 15,
            ],
            [
                'show_slug'=>'ceci-nest-pas-un-chanteur-belge',
                'location_slug'=>null,
                'login' => 'benoit99',
                'places' => 2,
            ],
        ];

        //Insert data in the table
        foreach ($representations_users as $data) {

            //on va recuperer l'id du show et de la location pour recupere la bonne representation
            //on aurait pu aller directement prendre l'id en BD !

            $show = Show::firstWhere('slug',$data['show_slug']);
            $location = Location::firstWhere('slug',$data['location_slug']);
           
            $tmp = null;
            if($location != null)
                $tmp = $location['id'];

            $representation = Representation::Where([
                ['show_id','=',$show['id'] ],
                ['location_id','=',$tmp]
            ])->first();
            
            $user = User::firstWhere('login',$data['login']);
            
            DB::table('user_representation')->insert([
                'representation_id' => $representation->id,
                'user_id' => $user->id,
                'places' => $data['places'],
            ]);
        }
    }
}
