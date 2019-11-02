<?php

use Illuminate\Database\Seeder;

class KelaminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kelamin::insert([
            [
                'kelamin'  => 'Pria',
            ],
            [
                'kelamin'  => 'Wanita',
            ],
        ]);
    }
}
