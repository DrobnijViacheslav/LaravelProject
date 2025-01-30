<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriorityLevelsTableSeeder extends Seeder
{
    public function run():void
    {
        DB::table('priority_levels')->insert([
            ['id' => 1, 'level_name' => 'низкий', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'level_name' => 'средний', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'level_name' => 'высокий', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

