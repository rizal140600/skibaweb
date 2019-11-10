<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kategori::insert([
            [
                'kategori' => 'Prestasi',
            ],
            [
                'kategori' => 'Kegiatan'
            ]
        ]);
    }
}
