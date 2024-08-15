<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransUsersController;


Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/paket-layanan', function () {
    return view('admin.paket');
});
Route::get('/jadwal-trip', function () {
    return view('admin.jadwal');
});
Route::get('/content', function () {
    return view('admin.shortvideo');
});
Route::get('/testimoni', function () {
    return view('admin.testimoni');
});
// Route::get('/pengaturan', function () {
//     return view('admin.pengaturan_pengguna');
// });
Route::get('/pengaturan-pengguna', function () {
    return view('admin.pengaturan_pengguna');
});
Route::get('/pengaturan-home', function () {
    return view('admin.pengaturan_home');
});
Route::get('/pengaturan-paket-layanan', function () {
    return view('admin.pengaturan_layanan');
});
Route::get('/pengaturan-jadwal-trip', function () {
    return view('admin.pengaturan_jadwal');
});
Route::get('/pengaturan-short-video', function () {
    return view('admin.pengaturan_short');
});
Route::get('/pengaturan-testimonial', function () {
    return view('admin.pengaturan_testimonial');
});
Route::get('/pengaturan-tentang-kami', function () {
    return view('admin.pengaturan_tentang_kami');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//json
Route::get('/users', [TransUsersController::class, 'index'])->name('users') ;
