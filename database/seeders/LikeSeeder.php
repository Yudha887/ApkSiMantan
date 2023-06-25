<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Like::create([
            "post_id" => 1,
            "user_id" => 2
        ]);

        Like::create([
            "post_id" => 2,
            "user_id" => 2
        ]);

        Like::create([
            "post_id" => 3,
            "user_id" => 3
        ]);
    }
}
