<?php

use Illuminate\Database\Seeder;

class PendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pendidikan::insert([
            [
                'pendidikan'  => 'S1',
                'pendidikan_jumlah' => 1
            ],
            [
                'pendidikan'  => 'S2',
                'pendidikan_jumlah' => 2
            ],
            [
                'pendidikan'  => 'S3',
                'pendidikan_jumlah' => 3
            ],
        ]);
    }
}
