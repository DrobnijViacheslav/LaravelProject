<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tasks')->insert([
            ['id' => 1, 'user_id' => 1, 'title' => 'Закончить проект', 'description' => 'Дедлайн на следующей неделе', 'status' => 'в процессе', 'priority' => 'высокий', 'due_date' => '2024-12-31', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'user_id' => 2, 'title' => 'Подготовить отчет', 'description' => 'Детализация за квартал', 'status' => 'ожидание', 'priority' => 'средний', 'due_date' => '2024-12-25', 'created_at' => now(), 'updated_at' => now()],
            // Добавьте остальные задачи из базы
        ]);
    }
}
