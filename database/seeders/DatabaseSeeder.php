<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("roles")->truncate();
        DB::table("users")->truncate();

        $roles = ["Admin", "Employee"];

        foreach ($roles as $role) {
            Role::create([
                "name" => $role
            ]);
        }

        User::create([
            "name" => "Yudha Pratama",
            "nip" => "11111",
            "email" => "yudha@gmail.com",
            "password" => bcrypt("admin"),
            "active" => 1,
            "role_id" => 1
        ]);

        User::create([
            "name" => "Pegawai",
            "nip" => "22222",
            "email" => "pegawai@gmail.com",
            "password" => bcrypt("pegawai"),
            "active" => 1,
            "role_id" => 2,
            "created_by" => 1
        ]);

        $this->call([
            FlagSeeder::class,
            PostSeeder::class,
            SavePostSeeder::class,
            LikeSeeder::class,
            CommentSeeder::class
        ]);
    }
}
