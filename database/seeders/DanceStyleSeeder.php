<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanceStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dance_styles')->insert(['name' => 'Pardans']);
        DB::table('dance_styles')->insert(['name' => 'Hip Hop']);
        DB::table('dance_styles')->insert(['name' => 'Show Dans']);
    }
}
