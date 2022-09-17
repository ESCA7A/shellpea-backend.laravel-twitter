<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        static $num = 0;
        \App\Models\User::factory(50)->create();
        \App\Models\Tweet::factory(11)->create();
        \App\Models\Commentary::factory(10)->create();
    }
}
