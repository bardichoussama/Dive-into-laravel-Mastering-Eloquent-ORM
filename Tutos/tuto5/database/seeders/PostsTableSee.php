<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $categories = [
                ['name' => 'Technologie'],
                ['name' => 'Sport'],
                ['name' => 'Cuisine'],
            ];
            foreach ($categories as $categoryData) {
                Category::create($categoryData);
            }

            $posts = [
                ['title' => 'Mon premier post', 'body' => 'Contenu du premier post', 'category_id' => 1],
              
            ];
    
            foreach ($posts as $postData) {
                Post::create($postData);
            }

    }
}
