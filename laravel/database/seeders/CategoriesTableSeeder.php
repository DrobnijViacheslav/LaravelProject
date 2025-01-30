<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run():void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Работа', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Личное', 'created_at' => now(), 'updated_at' => now()],
            // Добавьте остальные категории из базы
        ]);
    }
}
