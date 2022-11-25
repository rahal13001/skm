<?php

namespace Database\Seeders;

use App\Models\Datasurvei;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Datasurveiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');


        for($i = 1; $i <= 100; $i++){

       
 
    	      // insert data ke table datasurvei
    		    Datasurvei::insert([
                'tw' => $faker->numberBetween(1,4),
                'tahun' => $faker->year(),
                'p1_' => $faker->numberBetween(1,4),
                'p2_' => $faker->numberBetween(1,4),
                'p3_' => $faker->numberBetween(1,4),
                'p4_' => $faker->numberBetween(1,4),
                'p5_' => $faker->numberBetween(1,4),
                'p6_' => $faker->numberBetween(1,4),
                'p7_' => $faker->numberBetween(1,4),
                'p8_' => $faker->numberBetween(1,4),
                'p9_' => $faker->numberBetween(1,4),
                'p10_' => $faker->numberBetween(1,4),
                'p11_' => $faker->numberBetween(1,4),
                'p12_' => $faker->numberBetween(1,4),
                'p13_' => $faker->numberBetween(1,4),
                'p14_' => $faker->numberBetween(1,4),
                'p15_' => $faker->numberBetween(1,4),
                'p16_' => $faker->numberBetween(1,4),
                'p17_' => $faker->numberBetween(1,4),
                'p18_' => $faker->numberBetween(1,4),
                'p19_' => $faker->numberBetween(1,4),
                'p20_' => $faker->numberBetween(1,4),
                'total' => $faker->numberBetween(0,100),
                'saran' => $faker->text()
    		]);
 
    	}
    }
}
