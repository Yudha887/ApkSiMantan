<?php

namespace App\Http\Controllers;

use App\Models\RiwayatLogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view("pages.autentikasi.login");
    }
    
    public function post_login(Request $request)
    {
        $message = [
            "required" => "Kolom :attribute Harus Diisi",
            "min" => "Kolom :attribute Harus :min Digit"
        ];
        
        $this->validate($request, [
            "email" => "required",
            "password" => "required|min:5",
        ], $message);
        
        $cek_user = User::where("email", $request->email)->first();
        
        if (empty($cek_user)) {
            return back()->with("message", "Akun Tidak Terdaftar")->withInput();
        } else {
            if (!Hash::check($request->password, $cek_user->password)) {
                return back()->with("message", "Password Anda Salah")->withInput();
            } else {
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
                        return back()->with("message", "Akun Anda Tidak Aktif")->withInput();
                    }
                } else {
                    return back()->with("message", "Anda Tidak Memiliki Akses")->withInput();
                }
            }
        }
    }
    
    public function logout()
    {
        Auth::logout();
        
        return redirect("/login");
    }
}
