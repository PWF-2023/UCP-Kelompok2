<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' =>Str::random(10),
                'is_admin' => true
            ]
        );

        User::create(
            [
                'name' => 'Dhimas',
                'email' => 'dhimas@admin.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' =>Str::random(10),
                'is_admin' => false
            ]
        );

        Category::create(
            [
                'user_id' => '1',
                'title' => 'Category A',
            ]
        );
        Category::create(
            [
                'user_id' => '2',
                'title' => 'Category B',
            ]
        );
        Category::create(
            [
                'user_id' => '3',
                'title' => 'Category C',
            ]
        );

        User::factory(100)->create();
        Todo::factory(500)->create();
    }
}
