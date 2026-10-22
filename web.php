<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KontakController;

/*
|--------------------------------------------------------------------------
| Web Routes - Halloween Community Night
|--------------------------------------------------------------------------
*/

// Route Halaman Utama (Beranda)
Route::get('/', function () {
    return view('events.index');
})->name('events.index');

// Route Galeri di luar prefix (Opsional jika ingin diakses via /galeri)
Route::get('/galeri', function () {
    return view('events.galeri');
})->name('galeri');

// Group Route untuk Semua Halaman Events (Prefix: /events)
Route::prefix('events')->name('events.')->group(function () {
    
    // Halaman Tentang Event (/events/about)
    Route::get('/about', function () {
        return view('events.about');
    })->name('about');

    // Halaman Daftar Kegiatan (/events/kegiatan)
    Route::get('/kegiatan', [EventController::class, 'kegiatan'])->name('kegiatan');

    // Halaman Galeri (/events/galeri) - Menggunakan Controller sesuai permintaan Anda
    Route::get('/galeri', [EventController::class, 'galeri'])->name('galeri');

    // Halaman Kontak (GET untuk menampilkan form)
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

    // Halaman Kontak (POST untuk memproses kirim pesan)
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');

    // Halaman Registrasi (GET untuk menampilkan form)
    Route::get('/register', [EventController::class, 'create'])->name('register');

    // Proses Kirim Data Registrasi (POST)
    Route::post('/register', [EventController::class, 'store'])->name('store');

    // Detail Kegiatan berdasarkan ID 
    // (PENTING: Selalu letakkan route parameter seperti /{id} di paling bawah dalam group)
    Route::get('/{id}', [EventController::class, 'show'])->name('show');
    
});