<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [Dashboardcontroller::class, 'auth']);
Route::get('/register', [Dashboardcontroller::class, 'register']);
Route::get('/dokter', [Dashboardcontroller::class, 'dokter']);
Route::get('/periksa', [Dashboardcontroller::class, 'periksa']);
Route::get('/obat', [Dashboardcontroller::class, 'obat']);
Route::get('/pasien', [Dashboardcontroller::class, 'pasien']);
Route::get('/riwayat', [Dashboardcontroller::class, 'riwayat']);
Route::get('/periksaa', [Dashboardcontroller::class, 'periksaa']);

