<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Status::insert([
            [
                'status' => 'PNS Kemendikbud'
            ],
            [
                'status' => 'PNS Kemenag'
            ],
            [
                'status' => 'Honorer Sekolah Negeri'
            ],
            [
                'status' => 'Tetap Yayasan'
            ],
            [
                'status' => 'Tidak Tetap Yayasan'
            ],
            [
                'status' => 'PNS Diperbantukan di Sekolah Swasta'
            ],
            [
                'status' => 'PTT (Pegawai Tidak Tetap) Pemda'
            ],
            [
                'status' => 'SM3T'
            ],
        ]);
    }
}
