<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Flag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard_admin()
    {
        $data = [
            "tagar" => Flag::count(),
            "postingan" => Post::count(),
            "komentar" => Comment::count(),
            "pegawai" => User::where("role_id", 2)->count()    
        ];

        return view("pages.dashboard", $data);
    }
}
