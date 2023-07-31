<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;

// Rute untuk halaman welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Rute dashboard dan profil yang hanya dapat diakses oleh pengguna yang telah masuk (autentikasi).
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute create, store, edit, update, dan destroy untuk admin
    Route::middleware('isAdmin')->group(function () {
        Route::get('/umkms/create', [UMKMController::class, 'create'])->name('umkms.create');
        Route::post('/umkms', [UMKMController::class, 'store'])->name('umkms.store');
        Route::get('/umkms/{umkm}/edit', [UMKMController::class, 'edit'])->name('umkms.edit');
        Route::put('/umkms/{umkm}', [UMKMController::class, 'update'])->name('umkms.update');
        Route::delete('/umkms/{umkm}', [UMKMController::class, 'destroy'])->name('umkms.destroy');
    });
});

// Rute untuk tampilan UMKM yang dapat diakses oleh pengguna tanpa harus login.
Route::get('/umkms', [UMKMController::class, 'index'])->name('umkms.index');

// Rute untuk menampilkan detail UMKM
Route::get('/umkms/{umkm}', [UMKMController::class, 'show'])->name('umkms.show');

require __DIR__ . '/auth.php';
