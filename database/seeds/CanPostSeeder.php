<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Faccades\DB;

class CanPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("can_posts")->insert([
            "can_write" => 1,
        ]);
    }
}
