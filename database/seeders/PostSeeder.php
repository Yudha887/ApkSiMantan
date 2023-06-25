<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            "image" => "https://images.unsplash.com/photo-1687120327990-058e7a62d525?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "description" => "Lorem Ipsum Dolor Sit Amet...",
            "flag_id" => 1,
            "user_id" => 1
        ]);

        Post::create([
            "image" => "https://images.unsplash.com/photo-1687120327990-058e7a62d525?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "description" => "Lorem Ipsum Dolor Sit Hamdan Hamdan...",
            "flag_id" => 1,
            "user_id" => 1
        ]);

        Post::create([
            "image" => "https://images.unsplash.com/photo-1687120327990-058e7a62d525?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
            "description" => "Lorem Ipsum Dolor Sit Ronaldo...",
            "flag_id" => 2,
            "user_id" => 1
        ]);
    }
}
