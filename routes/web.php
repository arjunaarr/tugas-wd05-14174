<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObatController;
use App\Models\Periksa;

/* =========================
   1. Landing Page
========================= */
Route::get('/', function () {
    return view('landing');
})->name('landing');

/* =========================
   2. Login & Register
========================= */
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/* =========================
   3. Setelah Login - Semua pengguna
   Middleware: auth
========================= */
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/tables', [DashboardController::class, 'tables']);

    /* =========================
       4. Route Pasien
       Middleware: role:pasien
    ========================= */
    Route::middleware('role:pasien')->prefix('pasien')->group(function () {
        Route::get('/', fn () => view('pasien.dashboard'))->name('pasien.dashboard');
        Route::get('/periksa', fn () => view('pasien.periksa'))->name('pasien.periksa');
        Route::get('/riwayat', fn () => view('pasien.riwayat'))->name('pasien.riwayat');
    });

    /* =========================
       5. Route Dokter
       Middleware: role:dokter
    ========================= */
    Route::middleware('role:dokter')->prefix('dokter')->group(function () {
        Route::get('/', fn () => view('dokter.dashboard'))->name('dokter.dashboard');
        Route::get('/periksa', function () {
            $periksas = Periksa::all();
            return view('dokter.periksa', compact('periksas'));
        })->name('dokter.periksa');

        Route::get('/obat', [ObatController::class , 'index'])->name('dokter.obat');
        Route::post('/obat', [ObatController::class, 'store'])->name('dokter.obat.store');
        Route::get('/obat/{id}', [ObatController::class, 'edit'])->name('dokter.obat.edit');
        Route::put('/obat/{id}', [ObatController::class, 'update'])->name('dokter.obat.update');
        Route::delete('/obat/{id}', [ObatController::class, 'delete'])->name('dokter.obat.delete');
    });
});
