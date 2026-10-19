<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\PanelAuthController;
use App\Http\Controllers\PengunjungController;

// ==========================================
// 1. FALLBACK LOGIN
// ==========================================
Route::get('/login', function () {
    return redirect()->route('panel.login', ['role' => 'admin']);
})->name('login');

// ==========================================
// 2. ROUTE PENGUNJUNG (PUBLIK)
// ==========================================
Route::get('/', [PengunjungController::class, 'index'])->name('pengunjung.dashboard');
Route::get('/info', [PengunjungController::class, 'info'])->name('pengunjung.info');
Route::get('/wisata', [PengunjungController::class, 'wisata'])->name('pengunjung.wisata');
Route::get('/penginapan', [PengunjungController::class, 'penginapan'])->name('pengunjung.penginapan');
Route::get('/booking', [PengunjungController::class, 'booking'])->name('pengunjung.booking');
Route::get('/pembayaran', [PengunjungController::class, 'pembayaran'])->name('pengunjung.pembayaran');
Route::post('/pembayaran/proses', [PengunjungController::class, 'prosesPembayaran'])->name('pengunjung.pembayaran.proses');
Route::get('/tiket', [PengunjungController::class, 'statusTiket'])->name('pengunjung.tiket');

// ==========================================
// 3. ROUTE LOGIN PANEL
// ==========================================
Route::get('/{role}/login', [PanelAuthController::class, 'showLogin'])
    ->whereIn('role', ['admin', 'pengelola'])
    ->name('panel.login');

Route::post('/{role}/login', [PanelAuthController::class, 'login'])
    ->whereIn('role', ['admin', 'pengelola'])
    ->middleware('throttle:5,1')
    ->name('panel.login.post');

Route::post('/logout', [PanelAuthController::class, 'logout'])->name('panel.logout');

// ==========================================
// 4. ROUTE KHUSUS ADMIN
// ==========================================
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/wisata', [AdminController::class, 'wisata'])->name('wisata');
    Route::get('/penginapan', [AdminController::class, 'penginapan'])->name('penginapan');
    Route::get('/booking', [AdminController::class, 'booking'])->name('booking');
    
    Route::post('/booking/{booking}/confirm', [AdminController::class, 'confirm'])->name('booking.confirm');
    Route::post('/booking/{booking}/cancel', [AdminController::class, 'cancel'])->name('booking.cancel');
    
    Route::get('/pengelola', [AdminController::class, 'pengelola'])->name('pengelola');
    Route::post('/pengelola', [AdminController::class, 'storePengelola'])->name('pengelola.store');
    Route::delete('/pengelola/{user}', [AdminController::class, 'destroyPengelola'])->name('pengelola.destroy');
});

// ==========================================
// 5. ROUTE KHUSUS PENGELOLA
// ==========================================
Route::middleware(['auth', 'role:pengelola'])->prefix('pengelola')->name('pengelola.')->group(function () {
    Route::get('/', [PengelolaController::class, 'dashboard'])->name('dashboard');
    Route::get('/reservasi', [PengelolaController::class, 'reservasi'])->name('reservasi');
    Route::get('/operasional', [PengelolaController::class, 'operasional'])->name('operasional');
    Route::get('/analitik', [PengelolaController::class, 'analitik'])->name('analitik');
    Route::get('/pengaturan', [PengelolaController::class, 'pengaturan'])->name('pengaturan');
    
    Route::post('/reservasi', [PengelolaController::class, 'storeReservasi'])->name('reservasi.store');
    Route::delete('/reservasi/{reservasi}', [PengelolaController::class, 'destroyReservasi'])->name('reservasi.destroy');
});