<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $data["komentar"] = Comment::orderBy("created_at", "DESC")->get();

        return view("pages.admin.komentar.index", $data);
    }
}
