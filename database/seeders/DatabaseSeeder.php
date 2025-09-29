<?php

namespace Database\Seeders;

use App\Models\User;
use \App\Models\Article;
use \App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create super Admin User
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make(value:'password'),
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'TNT',
            'email' => 'thet.tun@code.berlin',
            'password' => Hash::make(value:'qt8sWqRDzCCteC6'),
        ]);
        User::factory(10)->create();
        Article::factory(50)->create();
        Comment::factory(100)->create();
    }
}
