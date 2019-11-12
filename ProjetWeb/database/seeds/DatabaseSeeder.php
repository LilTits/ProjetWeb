<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 100, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password')],
            ['id' => 101, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password')],
            ['id' => 102, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password')],
        ]);

        DB::table('role_user')->insert([
            ['id' => 100, 'role_id' => 1],
            ['id' => 101, 'role_id' => 2],
            ['id' => 102, 'role_id' => 3],
        ]);
    }
}
