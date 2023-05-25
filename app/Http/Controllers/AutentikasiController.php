<?php

namespace App\Http\Controllers;

use App\Models\RiwayatLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view("pages.autentikasi.login");
    }

    public function post_login(Request $request)
    {
        $cek_user = User::where("email", $request->email)->first();

        if ($cek_user->role_id == 1) {
            if ($cek_user->active == 1) {
                if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {

                    RiwayatLogin::create([
                        "user_id" => Auth::user()->id
                    ]);

                    $request->session()->regenerate();

                    return redirect()->intended("/admin/dashboard");
                } else {
                    return back();
                }
            } else {
                return back();
            }
        } else {
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}
