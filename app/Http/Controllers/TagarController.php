<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use Illuminate\Http\Request;

class TagarController extends Controller
{
    public function index()
    {
        $data["tagar"] = Flag::orderBy("created_at", "DESC")->get();

        return view("pages.admin.tagar.index", $data);
    }

    public function store(Request $request)
    {
        $messages = [
            "required" => "Kolom :attribute Harus Diisi"
        ];

        $this->validate($request, [
            "name" => "required"
        ], $messages);

        $cek = Flag::where("name", $request->name)->count();

        if ($cek > 0) {
            return back()->with("error", "Tidak Boleh Duplikasi Data")->withInput();
        }

        Flag::create($request->all());

        return back()->with("message", "Data Berhasil di Tambahkan");
    }

    public function update(Request $request, $id)
    {
        $messages = [
            "required" => "Kolom :attribute Harus Diisi"
        ];

        $this->validate($request, [
            "name" => "required"
        ], $messages);

        $cek = Flag::where("name", $request->name)->count();

        if ($cek > 0) {
            return back()->with("error", "Tidak Boleh Duplikasi Data")->withInput();
        }

        Flag::where("id", $id)->update([
            "name" => $request["name"]
        ]);

        return back()->with("message", "Data Berhasil di Simpan");
    }

    public function destroy($id)
    {
        Flag::where("id", $id)->delete();

        return back()->with("message", "Data Berhasil di Hapus");
    }
}
