<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        $data["post"] = Post::orderBy("created_at", "DESC")->get();

        return view("pages.landingpage.app.home", $data);
    }
}
