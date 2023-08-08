<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user1 = User::factory()->create([
            'name' => 'John Doe',
        ]);

        $user2 = User::factory()->create([
            'name' => 'Mike Tyson',
        ]);


        Post::factory(15)->create([
            'user_id' => $user1->id
        ]);

        Post::factory(15)->create([
            'user_id' => $user2->id
        ]);
    }
} 
