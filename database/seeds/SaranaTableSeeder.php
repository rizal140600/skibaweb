<?php

use Illuminate\Database\Seeder;

class SaranaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 100; $i++) { 
            \App\Sarana::create([
                'ruang_area' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'jumlah_ruang' => $faker->randomDigit,
                'luas' => $faker->randomDigit,
                'total_luas' => $faker->randomDigit,
            ]);
        }
    }
}
