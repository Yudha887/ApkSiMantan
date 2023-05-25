<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $data["user"] = User::where("role_id", 1)->orderBy("created_at", "DESC")->get();

        return view("pages.admin.akun.administrator.index", $data);
    }

    public function store(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "nip" => $request->nip,
            "password" => bcrypt("administrator"),
            "role_id" => 1,
            "active" => 1,
            "created_by" => Auth::user()->id
        ]);

        return back();
    }

    public function update(Request $request, $id)
    {
        User::where("id", $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "nip" => $request->nip
        ]);

        return back();
    }

    public function destroy($id)
    {
        User::where("id", $id)->delete();

        return back();
    }
}
