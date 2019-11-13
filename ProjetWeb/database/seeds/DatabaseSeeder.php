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
            ['user_id' => 100, 'role_id' => 1],
            ['user_id' => 101, 'role_id' => 2],
            ['user_id' => 102, 'role_id' => 3],
        ]);

        DB::table('events')->insert([
            ['id' => 100, 'name' => Str::random(10), 'description' => Str::random(10), 'start_date' => '2019-11-06 00:00:00', 'end_date' => '2019-11-06 00:00:00', 'price' => 0, 'creator' => 100],
            ['id' => 101, 'name' => Str::random(10), 'description' => Str::random(10), 'start_date' => '2019-11-06 00:00:00', 'end_date' => '2019-11-06 00:00:00', 'price' => 0, 'creator' => 100],
            ['id' => 102, 'name' => Str::random(10), 'description' => Str::random(10), 'start_date' => '2019-11-06 00:00:00', 'end_date' => '2019-11-06 00:00:00', 'price' => 0, 'creator' => 100],
            ['id' => 103, 'name' => Str::random(10), 'description' => Str::random(10), 'start_date' => '2019-11-06 00:00:00', 'end_date' => '2019-11-06 00:00:00', 'price' => 0, 'creator' => 102],
            ['id' => 104, 'name' => Str::random(10), 'description' => Str::random(10), 'start_date' => '2019-11-06 00:00:00', 'end_date' => '2019-11-06 00:00:00', 'price' => 0, 'creator' => 101],
            ['id' => 105, 'name' => Str::random(10), 'description' => Str::random(10), 'start_date' => '2019-11-06 00:00:00', 'end_date' => '2019-11-06 00:00:00', 'price' => 0, 'creator' => 100],
        ]);

        DB::table('event_participants')->insert([
            ['event_id' => 100, 'user_id' => 100],
            ['event_id' => 101, 'user_id' => 102],
            ['event_id' => 102, 'user_id' => 100],
            ['event_id' => 105, 'user_id' => 101],
        ]);
    }
}
