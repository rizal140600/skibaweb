<?php

use Illuminate\Database\Seeder;

class KepalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kepala::insert([
            [
                'kepala' => 'Hey Aprianto',
                'kepala_sambutan' => 'Assalamualaikum'
            ]
        ]);
    }
}
