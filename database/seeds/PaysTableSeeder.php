<?php

use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pays')->delete();

         $pays = [
         	[
         		"name" =>"Côte d'ivoire",
         		"Population"=>"200 000 000 Habitants",
         		"capital"=>"Abidjan",
         		"superficie"=>322 462,
         		"situation_economique"=>"stable"
         	]
         ];
          $pays = [
         	[
         		"name" =>"Sénégal",
         		"Population"=>"5 000 000 Habitants",
         		"capital"=>"Abidjan",
         		"superficie"=>12 462,
         		"situation_economique"=>"stable"
         	]
         ];
          $pays = [
         	[
         		"name" =>"Ghana",
         		"Population"=>"2 000 000 Habitants",
         		"capital"=>"Abidjan",
         		"superficie"=>5 462,
         		"situation_economique"=>"stable"
         	]
         ];

         DB::table('pays')->insert($pays);
    }
}
