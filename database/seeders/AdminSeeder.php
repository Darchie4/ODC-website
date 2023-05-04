<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') ->insert([
            'name' => 'Mads W. Pedersen',
            'email' => 'test@testMail.com',
            'verifiedAdmin' => true,
            'password' => '$2y$10$LV/gg8rldp2a9Hi3PVGHhepkBhIgUbHifcFZFIgHafQ2RnE9aJa2K',
            'created_at' => '2023-05-03 13:34:03'
        ]);
    }
}
