<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function profil_saya()
    {
        return view("pages.admin.akun.profil_saya.index");
    }

    public function update_profil(Request $request)
    {
        $messages = [
            "required" => "Kolom :attribute Tidak Boleh Kosong",
            "image" => "Kolom :attribute Harus Berupa Gambar",
            "mimes" => "Kolom :attribute Harus Bertipe PNG, JPG, atau JPEG"
        ];

        $this->validate($request, [
            "name" => "required",
            "foto" => "image|max:2048|mimes:png,jpg,jpeg"
        ], $messages);

        try {

            if ($request->foto) {
                if ($request->gambarLama) {
                    Storage::delete($request->gambarLama);   
                }

                $data = $request->file("foto")->store("profil");
            } else {
                $data = null;
            }

            User::where("id", Auth::user()->id)->update([
                "name" => $request->name,
                "image" => $data
            ]);

            return back()->with("message", "Data Berhasil di Simpan");
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
