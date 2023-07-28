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
        $messages = [
            "required" => "Kolom :attribute Harus Diisi",
            "unique" => "Email Tersebut Sudah Digunakan",
            "numeric" => "Kolom :attribute Harus Angka"
        ];

        $this->validate($request, [
            "name" => "required",
            "email" => "required|unique:users",
            "nip" => "required|numeric"
        ], $messages);

        $cek = User::where("nip", $request->nip)->count();

        if ($cek > 0) {
            return back()->with("error", "NIP Sudah Digunakan");
        }

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "nip" => $request->nip,
            "password" => bcrypt("administrator"),
            "role_id" => 1,
            "active" => 1,
            "created_by" => Auth::user()->id
        ]);

        return back()->with("message", "Data Berhasil di Tambahkan");
    }

    public function update(Request $request, $id)
    {
        $messages = [
            "required" => "Kolom :attribute Harus Diisi",
            "unique" => "Email Tersebut Sudah Digunakan",
            "numeric" => "Kolom :attribute Harus Angka"
        ];

        $this->validate($request, [
            "name" => "required",
            "nip" => "required|numeric"
        ], $messages);

        $cek = User::where("nip", $request->nip)->count();

        User::where("id", $id)->update([
            "name" => $request->name,
            "nip" => $request->nip
        ]);

        return back()->with("message", "Data Berhasil di Simpan");
    }

    public function destroy($id)
    {
        User::where("id", $id)->delete();

        return back()->with("message", "Data Berhasil di Hapus");
    }
}
