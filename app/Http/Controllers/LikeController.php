<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        $data["like"] = Like::orderBy("created_at", "DESC")->get();

        return view("pages.admin.like.index", $data);
    }
}
