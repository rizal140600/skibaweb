<?php

use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
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
            \App\Guru::create([
                'gambar_guru' => $faker->word,
                'nama_guru' => $faker->word,
                'kelamin_id' => $faker->randomElement($array = array (1,2)),
                'bidang_id' => $faker->randomElement($array = array (1,2,3)),
                'pendidikan_id' => $faker->randomElement($array = array (1,2,3)),
                'status_id' => $faker->randomElement($array = array (1,2,3,4,5)),
                'alamat_guru' => $faker->address,
                'telepon_guru' => $faker->numberBetween($min = 1000000000, $max = 9000000000),
            ]);
        }
    }
}
