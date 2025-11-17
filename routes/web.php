<?php

use Illuminate\Support\Facades\Route;
// 1. Import PageController kita di sini
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah kita mendaftarkan rute web untuk aplikasi kita.
|
*/

// Rute untuk Halaman Utama ('/')
// Ini akan memanggil fungsi 'home' di PageController
Route::get('/', [PageController::class, 'home'])->name('home');

// Rute untuk halaman pendidikan ('/pendidikan')
// Ini akan memanggil fungsi 'education'
Route::get('/pendidikan', [PageController::class, 'education'])->name('education');

// Rute untuk halaman pengalaman ('/pengalaman')
// Ini akan memanggil fungsi 'experience'
Route::get('/pengalaman', [PageController::class, 'experience'])->name('experience');

// Rute untuk halaman keahlian ('/keahlian')
// Ini akan memanggil fungsi 'skills'
Route::get('/keahlian', [PageController::class, 'skills'])->name('skills');