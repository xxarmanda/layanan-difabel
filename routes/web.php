<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama
Route::get('/', function () {
    return view('beranda');
});

// ------------------------
// Halaman Beranda & Admin
// ------------------------
Route::controller(AdminController::class)->group(function () {
    // Beranda (beri nama route supaya gampang dipanggil di redirect/link)
    Route::get('/beranda', 'beranda')->name('beranda');
    Route::get('/beranda2', 'beranda2')->name('beranda2');
    Route::get('/beranda3', 'beranda3')->name('beranda3');

    // View Admin
    Route::get('/admin1', 'admin1')->name('admin1');
    Route::get('/admin2', 'admin2')->name('admin2');

    // Halaman tambahan
    Route::get('/db', 'db')->name('db');

    // Halaman pilihan (menampilkan data)
    Route::get('/pilihan-1', 'pilihan1')->name('pilihan1');
    Route::get('/pilihan2', 'pilihan2')->name('pilihan2');

    // -----------------------------
    // CRUD untuk pilihan1 (admin1)
    // -----------------------------
    Route::post('/admin1/store', 'store')->name('pilihan1.store');
    Route::put('/admin1/update/{id}', 'update')->name('pilihan1.update');
    Route::delete('/admin1/delete/{id}', 'destroy')->name('pilihan1.destroy');

    // -----------------------------
    // CRUD untuk pilihan2 (admin2)
    // -----------------------------
    Route::post('/admin2/store', 'store2')->name('pilihan2.store');
    Route::put('/admin2/update/{id}', 'update2')->name('pilihan2.update');
    Route::delete('/admin2/delete/{id}', 'destroy2')->name('pilihan2.destroy');
});

// ------------------------
// Login, Register, Logout
// ------------------------
Route::controller(LoginController::class)->group(function () {
    // Login
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('login.post');

    // Register
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register')->name('register.post');

    // Logout (POST method only)
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});

// -------------------------------
// Lokasi atau Location
// -------------------------------
Route::get('/lokasi', function () {
    return view('lokasi'); // memanggil resources/views/lokasi.blade.php
});

// -------------------------------
// Halaman Ebook
// -------------------------------
Route::get('/ebook', function () {
    return view('ebook');
});

// -------------------------------
// Halaman logout
// -------------------------------
Route::get('/logout', function () {
    return view('logout'); // jika filenya profile.blade.php
})->middleware('auth');
