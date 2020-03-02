<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peoples')->insert([
            "id" => "1",
            "name" => "hoàng",
            "phone" => "0862096685",
            "email" => "hoang@gmail.com",
            "image" => " "
        ]);
    }
}
