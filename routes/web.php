<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransUsersController;
use App\Http\Controllers\TransLayananController;
use App\Http\Controllers\TransTripController;
use App\Http\Controllers\TransShortVideoController;
use App\Http\Controllers\TransTestimoniController;
use App\Http\Controllers\TransTentangkamiController;
use App\Http\Controllers\TransHomeController;
use App\Http\Controllers\PaketLayananController;

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


//json paket-layanan
Route::get('/PaketLayanan', [PaketLayananController::class, 'index'])->name('PaketLayanan');
Route::post('/paket-layanan', [PaketLayananController::class, 'store'])->name('layanan.store');
Route::delete('/PaketLayanan/{id}', [PaketLayananController::class, 'destroy']);



//json pengaturan-users
Route::get('/UsersTrans', [TransUsersController::class, 'index'])->name('usersTrans');


//json pengaturan-layanan
Route::get('/LayananTrans', [TransLayananController::class, 'index'])->name('LayananTrans');
Route::post('/pengaturan-paket-layanan', [TransLayananController::class, 'store'])->name('layanan.store');


//json trip
Route::get('/TripTrans', [TransTripController::class, 'index'])->name('TripTrans');
Route::post('/pengaturan-jadwal-trip', [TransTripController::class, 'store'])->name('trip.store');

//json pengaturan short video
Route::get('/ShortVideoTrans', [TransShortVideoController::class, 'index'])->name('ShortVideoTrans');
Route::post('/pengaturan-short-video', [TransShortVideoController::class, 'store'])->name('shortvideo.store');

//json  pengaturan tetstimoni
Route::get('/TestimoniTrans', [TransTestimoniController::class, 'index'])->name('TestimoniTrans');
Route::post('/pengaturan-testimonial', [TransTestimoniController::class, 'store'])->name('testimoni.store');

//json pengaturan tentang kami
Route::get('/TentangkamiTrans', [TransTentangkamiController::class, 'index'])->name('TentangkamiTrans');
Route::post('/pengaturan-tentang-kami', [TransTentangkamiController::class, 'store'])->name('tentangkami.store');

//json  pengaturan Home
Route::get('/HomeTrans', [TransHomeController::class, 'index'])->name('HomeTrans');
Route::post('/pengaturan-home', [TransHomeController::class, 'store'])->name('home.store');
