<?php

use Illuminate\Database\Seeder;

class PengumumanTableSeeder extends Seeder
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
            \App\Pengumuman::create([
                'judul_pengumuman' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'isi_pengumuman' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            ]);
        }
    }
}
