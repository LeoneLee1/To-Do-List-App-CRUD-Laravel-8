<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('tasks')->insert([
            'task' => Str::random(10),
        ]);
        DB::table('tasks')->insert([
            'task' => Str::random(15),
        ]);
        DB::table('tasks')->insert([
            'task' => Str::random(20),
        ]);
    }
}
