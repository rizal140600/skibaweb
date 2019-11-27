<?php

use Illuminate\Database\Seeder;

class GaleriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 20; $i++) { 
            \App\Galeri::create([
                'kategori_id' => $faker->randomElement($array = array (1,2)),
                'judul_gambar' => $faker->sentence($nbWords = 5, $variableNbWords = true),
                'gambar' => $faker->sentence($nbWords = 1, $variableNbWords = true),
            ]);
        }
    }
}
