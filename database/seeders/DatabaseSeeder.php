<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\electrica::factory(5)->create();
        \App\Models\instrumente::factory(5)->create();
        \App\Models\uzcasnic::factory(5)->create();
        \App\Models\santehnica::factory(5)->create();
        \App\Models\suruburi::factory(5)->create();
    }
}
