<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksCategoriesTableSeeder extends Seeder
{
    public function run():void
    {
        DB::table('task_categories')->insert([
            ['id' => 1, 'task_id' => 1, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'task_id' => 2, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Добавьте остальные связи из базы
        ]);
    }
}
