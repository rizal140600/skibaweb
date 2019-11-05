<?php

use Illuminate\Database\Seeder;

class MisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Misi::insert([
            [
                'visi' => 'visi',
                'misi' => 'misi'
            ],
        ]);
    }
}
