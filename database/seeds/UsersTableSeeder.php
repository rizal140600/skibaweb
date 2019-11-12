<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ModelUser::insert([
            [
                'email' => 'admin@admin.com',
                'password' => '12345678',
                'name' => 'admin',
            ]
        ]);
    }
}
