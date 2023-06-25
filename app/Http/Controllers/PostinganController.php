<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index()
    {
        $data["postingan"] = Post::orderBy("created_at", "DESC")->get();

        return view("pages.admin.postingan.index", $data);
    }
}
