<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(["middleware" => ["guest"]], function() {
    Route::get("/", [AutentikasiController::class, "login"]);
    Route::prefix("login")->group(function() {
        Route::get("/", [AutentikasiController::class, "login"]);
        Route::post("/", [AutentikasiController::class, "post_login"]);
    });
});

Route::group(["middleware" => ["is_admin"]], function() {
    Route::prefix("admin")->group(function() {
        Route::get("/dashboard", [AppController::class, "dashboard_admin"]);

        Route::prefix("akun")->group(function() {
            Route::get("/profil", [ProfilController::class, "profil_saya"]);
            Route::resource("/pegawai", PegawaiController::class);
            Route::resource("/admin", AdminController::class);
        });
    });
    Route::get("/logout", [AutentikasiController::class, "logout"]);
});
