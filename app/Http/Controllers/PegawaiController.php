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
            "password" => bcrypt("pegawai"),
            "nip" => $request->nip,
            "role_id" => 2,
            "active" => 1
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
