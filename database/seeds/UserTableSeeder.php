<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Super Admin', 'email' => 'superadmin@zincat.net', 'password' => bcrypt('12345678')],
            ['name' => 'Dimuthu Jayalath', 'email' => 'dimuthu@zincat.net', 'password' => bcrypt('12345678')],
            ['name' => 'Amal Perera', 'email' => 'amal@zincat.net', 'password' => bcrypt('12345678')],
            ['name' => 'Kamal Vijitha', 'email' => 'kamal@zincat.net', 'password' => bcrypt('12345678')]
        ]);
    }
}
