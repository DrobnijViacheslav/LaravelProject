<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Иван Иванов', 'email' => 'ivanov@example.com', 'password' => bcrypt('password123'), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Мария Смирнова', 'email' => 'smirnova@example.com', 'password' => bcrypt('password123'), 'created_at' => now(), 'updated_at' => now()],
            // Добавьте остальных пользователей из базы
        ]);
    }
}
