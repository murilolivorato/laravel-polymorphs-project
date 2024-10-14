<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create 10 posts
        Post::factory(10)->create()->each(function ($post) {
            // Create 5 comments for each post
            Comment::factory(5)->create(['commentable_id' => $post->id, 'commentable_type' => Post::class]);
            // Attach 3 tags to each post
            $tags = Tag::factory(3)->create();
            $post->tags()->attach($tags);
        });

        // Create 10 videos
        Video::factory(10)->create()->each(function ($video) {
            // Create 5 comments for each video
            Comment::factory(5)->create(['commentable_id' => $video->id, 'commentable_type' => Video::class]);
            // Attach 3 tags to each video
            $tags = Tag::factory(3)->create();
            $video->tags()->attach($tags);
        });
    }
}
