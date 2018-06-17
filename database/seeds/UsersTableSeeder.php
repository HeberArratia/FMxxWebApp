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
        DB::table('users')->insert([
            'name' => 'Carlos',
            'lastname' => 'Fuentes',
            'email' => 'carlos@gmail.com',
            'type' => 1,
            'password' => bcrypt('123456'),
        ]);

    }
}
