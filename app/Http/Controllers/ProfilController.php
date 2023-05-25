<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil_saya()
    {
        return view("pages.admin.akun.profil_saya.index");
    }
}
