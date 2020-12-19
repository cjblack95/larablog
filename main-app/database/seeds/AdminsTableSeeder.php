<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('larablog_admins')->insert([
            'first_name' => 'Erfan',
            'last_name' => 'Jorin',
            'email' => 'admin@mail.com',
            'mobile' => '012345678',
            'username' => 'jorin',
            'password' => Hash::make('12345678'),
        ]);
    }
}
