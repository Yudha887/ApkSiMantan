<?php

namespace Database\Seeders;

use App\Models\SavePost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SavePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SavePost::create([
            "post_id" => 1,
            "user_id" => 1
        ]);

        SavePost::create([
            "post_id" => 2,
            "user_id" => 1
        ]);

        SavePost::create([
            "post_id" => 3,
            "user_id" => 1
        ]);
    }
}
