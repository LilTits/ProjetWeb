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
            ['id' => 100, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 101, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 102, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 103, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 104, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 105, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 106, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 107, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 108, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 109, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 110, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 111, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 112, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 113, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 114, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 115, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 116, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 117, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 118, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 119, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
            ['id' => 120, 'first_name' => Str::random(10), 'last_name' => Str::random(10), 'email' => Str::random(10).'@gmail.com', 'password' => bcrypt('password'), 'role_id' => mt_rand(2,5), 'center_id' => mt_rand(2,25)],
        ]);
        

        DB::table('user_adresses')->insert([
            ['adress_id' => mt_rand(1,10), 'user_id' => 100, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 101, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 102, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 103, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 104, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 105, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 106, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 107, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 108, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 109, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 110, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 111, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 112, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 113, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 114, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 115, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 116, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 117, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 118, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 119, 'is_primary' => 1],
            ['adress_id' => mt_rand(1,10), 'user_id' => 120, 'is_primary' => 1],

            ['adress_id' => mt_rand(11,15), 'user_id' => mt_rand(100,105), 'is_primary' => 0],
            ['adress_id' => mt_rand(11,15), 'user_id' => mt_rand(106,110), 'is_primary' => 0],
            ['adress_id' => mt_rand(11,15), 'user_id' => mt_rand(111,115), 'is_primary' => 0],
            ['adress_id' => mt_rand(11,15), 'user_id' => mt_rand(116,120), 'is_primary' => 0],

            ['adress_id' => mt_rand(16,20), 'user_id' => mt_rand(100,105), 'is_primary' => 0],
            ['adress_id' => mt_rand(16,20), 'user_id' => mt_rand(106,110), 'is_primary' => 0],
            ['adress_id' => mt_rand(16,20), 'user_id' => mt_rand(111,115), 'is_primary' => 0],
            ['adress_id' => mt_rand(16,20), 'user_id' => mt_rand(116,120), 'is_primary' => 0],

            ['adress_id' => mt_rand(21,24), 'user_id' => mt_rand(100,105), 'is_primary' => 0],
            ['adress_id' => mt_rand(21,24), 'user_id' => mt_rand(106,110), 'is_primary' => 0],
            ['adress_id' => mt_rand(21,24), 'user_id' => mt_rand(111,115), 'is_primary' => 0],
            ['adress_id' => mt_rand(21,24), 'user_id' => mt_rand(116,120), 'is_primary' => 0],

        ]);

        DB::table('carts')->insert([
            ['id' => 100, 'user_id' => 100, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 101, 'user_id' => mt_rand(103,104), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 102, 'user_id' => mt_rand(105,106), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 103, 'user_id' => mt_rand(107,108), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 104, 'user_id' => mt_rand(109,110), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 105, 'user_id' => 112, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 106, 'user_id' => 113, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 107, 'user_id' => mt_rand(115,116), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 108, 'user_id' => mt_rand(117,118), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],
            ['id' => 109, 'user_id' => mt_rand(119,120), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(1,10)],

            ['id' => 110, 'user_id' => 100, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 111, 'user_id' => mt_rand(103,104), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 112, 'user_id' => mt_rand(105,106), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 113, 'user_id' => mt_rand(107,108), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 114, 'user_id' => mt_rand(109,110), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 115, 'user_id' => 112, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 116, 'user_id' => 113, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 117, 'user_id' => mt_rand(115,116), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 118, 'user_id' => mt_rand(117,118), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],
            ['id' => 119, 'user_id' => mt_rand(119,120), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(11,20)],

            ['id' => 120, 'user_id' => 100, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 121, 'user_id' => mt_rand(103,104), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 122, 'user_id' => mt_rand(105,106), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 123, 'user_id' => mt_rand(107,108), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 124, 'user_id' => mt_rand(109,110), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 125, 'user_id' => 112, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 126, 'user_id' => mt_rand(113,114), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 127, 'user_id' => mt_rand(115,116), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 128, 'user_id' => 118, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],
            ['id' => 129, 'user_id' => mt_rand(119,120), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(21,30)],

            ['id' => 130, 'user_id' => 100, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 131, 'user_id' => mt_rand(103,104), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 132, 'user_id' => mt_rand(105,106), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 133, 'user_id' => mt_rand(107,108), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 134, 'user_id' => mt_rand(109,110), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 135, 'user_id' => 112, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 136, 'user_id' => mt_rand(113,114), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 137, 'user_id' => mt_rand(115,116), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 138, 'user_id' => mt_rand(117,118), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],
            ['id' => 139, 'user_id' => mt_rand(119,120), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(31,40)],

            ['id' => 140, 'user_id' => 100, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 141, 'user_id' => 104, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 142, 'user_id' => mt_rand(105,106), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 143, 'user_id' => mt_rand(107,108), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 144, 'user_id' => mt_rand(109,110), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 145, 'user_id' => 112, 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 146, 'user_id' => mt_rand(113,114), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 147, 'user_id' => mt_rand(115,116), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 148, 'user_id' => mt_rand(117,118), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
            ['id' => 149, 'user_id' => mt_rand(119,120), 'product_id' => mt_rand(100,110), 'quantity' => mt_rand(41,50)],
        ]);

        DB::table('events')->insert([
            ['id' => 100, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 101, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 102, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 103, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 104, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 105, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 106, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 107, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 108, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 109, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 110, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 111, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 112, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 113, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 114, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 115, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 116, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 117, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 118, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 119, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 120, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 121, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 122, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 123, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
            ['id' => 124, 'name' => 'Event - '.Str::random(10), 'description' => Str::random(100), 'start_date' => '2019-01-01 00:00:00', 'end_date' => '2019-01-01 00:00:00', 'price' => mt_rand(0,50), 'creator' => mt_rand(100,120), 'max_participants' => mt_rand(5,50), 'ecategory_id' => mt_rand(1,9)],
        ]);

        DB::table('event_participants')->insert([
            ['event_id' => mt_rand(100,124), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(100,124), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(100,124), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(100,124), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(102,123), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(102,123), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(102,123), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(102,123), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(103,122), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(103,122), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(103,122), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(103,122), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(104,121), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(104,121), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(104,121), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(104,121), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(105,120), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(105,120), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(105,120), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(105,120), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(106,119), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(106,119), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(106,119), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(106,119), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(107,118), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(107,118), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(107,118), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(107,118), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(108,117), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(108,117), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(108,117), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(108,117), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(109,116), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(109,116), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(109,116), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(109,116), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(110,115), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(110,115), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(110,115), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(110,115), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(111,114), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(111,114), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(111,114), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(111,114), 'user_id' => mt_rand(116,120)],

            ['event_id' => mt_rand(112,113), 'user_id' => mt_rand(100,105)],
            ['event_id' => mt_rand(112,113), 'user_id' => mt_rand(106,110)],
            ['event_id' => mt_rand(112,113), 'user_id' => mt_rand(111,115)],
            ['event_id' => mt_rand(112,113), 'user_id' => mt_rand(116,120)],
        ]);

        DB::table('comments')->insert([
            ['id' => 100, 'description' => Str::random(10), 'event_id' => 100, 'author' => 100],
            ['id' => 101, 'description' => Str::random(10), 'event_id' => 101, 'author' => 102],
            ['id' => 102, 'description' => Str::random(10), 'event_id' => 101, 'author' => 100],
            ['id' => 103, 'description' => Str::random(10), 'event_id' => 101, 'author' => 101],
            ['id' => 104, 'description' => Str::random(10), 'event_id' => 100, 'author' => 102],
        ]);

        DB::table('comment_likes')->insert([
            ['comment_id' => 100, 'user_id' => 100],
            ['comment_id' => 101, 'user_id' => 102],
            ['comment_id' => 102, 'user_id' => 100],
            ['comment_id' => 101, 'user_id' => 101],
            ['comment_id' => 102, 'user_id' => 101],
            ['comment_id' => 103, 'user_id' => 101],
            ['comment_id' => 104, 'user_id' => 101],
        ]);

        DB::table('permissions')->insert([
            ['id' => 100, 'slug' => 'test_zero', 'name' => 'Test Zero', 'description' => Str::random(10)],
            ['id' => 101, 'slug' => 'test_one', 'name' => 'Test One', 'description' => Str::random(10)],
            ['id' => 102, 'slug' => 'test_two', 'name' => 'Test Two', 'description' => Str::random(10)],
            ['id' => 103, 'slug' => 'test_three', 'name' => 'Test Three', 'description' => Str::random(10)],
        ]);

        DB::table('permission_user')->insert([
            ['permission_id' => 100, 'user_id' => 100],
            ['permission_id' => 101, 'user_id' => 102],
            ['permission_id' => 102, 'user_id' => 100],
            ['permission_id' => 101, 'user_id' => 101],
            ['permission_id' => 102, 'user_id' => 101],
            ['permission_id' => 103, 'user_id' => 101],
        ]);


    }
}
