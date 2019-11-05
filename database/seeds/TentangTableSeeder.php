<?php

use Illuminate\Database\Seeder;

class TentangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tentang::insert([
            [
                'sekolah_gambar' => 'gambar',
                'tentang' => 'sekolahnya sangat bagus'
            ],
        ]);
    }
}
