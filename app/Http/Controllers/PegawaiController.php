<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data["pegawai"] = User::where("role_id", 2)->orderBy("created_at", "DESC")->get();

        return view("pages.admin.akun.pegawai.index", $data);
    }

    public function store(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt("pegawai"),
            "nip" => $request->nip,
            "role_id" => 2,
            "active" => 1
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
