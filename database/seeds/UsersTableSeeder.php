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
        DB::table('users')->insert([
            'name' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'type' => 1,
            'password' => bcrypt('admin'),
        ]);

    }
}
