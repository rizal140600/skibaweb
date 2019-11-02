<?php

use Illuminate\Database\Seeder;

class StudiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Studi::insert([
            [
                'nama_bidang' => 'Matematika'
            ],
            [
                'nama_bidang' => 'Bahasa Indonesia'
            ],
            [
                'nama_bidang' => 'Bahasa Inggris'
            ]
            
        ]);
    }
}
