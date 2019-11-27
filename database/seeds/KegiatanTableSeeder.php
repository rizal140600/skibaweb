<?php

use Illuminate\Database\Seeder;

class KegiatanTableSeeder extends Seeder
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
            \App\Kegiatan::create([
                'kegiatan_foto' => $faker->sentence($nbWords = 1, $variableNbWords = true),
                'kegiatan_judul' => $faker->sentence($nbWords = 5, $variableNbWords = true),
                'kegiatan_isi' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                'kegiatan_lokasi' => $faker->cityPrefix,
                'kegiatan_tahun' => $faker->year($max = 'now'),
                'kegiatan_waktu' => $faker->time($format = 'H:i:s') . '-' . $faker->time($format = 'H:i:s'),
            ]);
        }
    }
}
