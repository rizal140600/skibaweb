<?php

use Illuminate\Database\Seeder;

class IdentitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Identitas::insert([
            [
                'nama_Sekolah' => 'SMK Negeri 1 Badegan',
                'status' => 'Negeri',
                'alamat' => 'JL. SUYUDONO NO.01, BADEGAN, Kec. Badegan, Kab. Ponorogo Prov. Jawa Timur',
                'telepon_fax' => '20539063',
                'website_email' => 'smkn1badegan@gmail.com',
                'kepala_sekolah' => 'Hery Aprianto',
                'nomer_sekolah' => '20539063',
                'npsn' => '20539063',
                'no_sk_pendirian' => '1784/V/SK/1971',
                'tgl_sk_pendirian' => 'Tanggal 16 Maret 1971',
                'no_penyelenggaraan' => '422/11511/436.6.4/2011',
                'penyelenggara' => 'Diknas Kota Surabaya',
                'akreditasi' => 'A (Badan Akreditasi Provinsi)

Nilai 94 Tahun 2010

ISO 9001 ; 2008 Tahun 2011

'
            ]
        ]);
    }
}
