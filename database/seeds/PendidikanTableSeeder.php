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
            ],
            [
                'pendidikan'  => 'S2',
            ],
            [
                'pendidikan'  => 'S3',
            ],
            [
                'pendidikan'  => 'D4',
            ],
            [
                'pendidikan'  => 'D3',
            ],
            [
                'pendidikan'  => 'D2',
            ],
            [
                'pendidikan'  => 'D1',
            ],
            [
                'pendidikan'  => 'SMA/SMK',
            ],
        ]);
    }
}
