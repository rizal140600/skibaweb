<?php

use Illuminate\Database\Seeder;

class PembelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) { 
            \App\Pembelajaran::create([
                'nama_file' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'guru_id' => $faker->randomElement($array = array (1,2,3,4,5)),
                'link' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            ]);
        }
    }
}
