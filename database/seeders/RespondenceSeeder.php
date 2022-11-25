<?php

namespace Database\Seeders;

use Faker\Factory as Faker;

use App\Models\Datasurvei;
use App\Models\Respondence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RespondenceSeeder extends Seeder
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

            $gender = $faker->randomElement(['male', 'female']);
            $gend = $faker->randomElement(['Laki-laki', 'Perempuan']);
 
    	      // insert data ke table respondence menggunakan Faker
    		    Respondence::insert([
    			'nama' => $faker->name($gender),
    			'badan_usaha' => $faker->company(),
    			'email' => $faker->email(),
    			'domisili' => $faker->city(),
                'pekerjaan' => $faker->jobTitle(),
                'jk' => $gend,
                'datasurvei_id' => $faker->unique()->numberBetween(1,100),
    		]);
 
    	}
    }
}
