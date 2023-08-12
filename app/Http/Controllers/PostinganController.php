<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use PDF;

class PostinganController extends Controller
{
    public function index()
    {
        $data["postingan"] = Post::orderBy("created_at", "DESC")->get();

        return view("pages.admin.postingan.index", $data);
    }

    public function show()
    {
        try {
            $postingan = Post::get();

            $pdf = PDF::loadView("pages.admin.postingan.download_all", ["postingan" => $postingan])->setPaper("a3");

            return $pdf->download("Data_Laporan_Postingan.pdf", $pdf);

        } catch (\Exception $e) {
            dd($e);
        }
    }
}
