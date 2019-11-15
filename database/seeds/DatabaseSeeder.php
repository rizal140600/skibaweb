<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KelaminTableSeeder::class);
        $this->call(PendidikanTableSeeder::class);
        $this->call(StudiTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(StatusTableSeeder::class);
    }
}
