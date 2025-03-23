<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'slug' => 'first-blog-post',
                'title' => 'First Blog Post',
                'description' => 'This is the description of the first blog post.',
                'image_path' => 'images/first-post.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'second-blog-post',
                'title' => 'Second Blog Post',
                'description' => 'This is the description of the second blog post.',
                'image_path' => 'images/second-post.jpg',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
