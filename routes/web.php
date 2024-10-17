<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Mengarahkan root URL ke dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// Route lainnya
Route::get('/halaman', function () {
    return view('halaman');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('products', ProductController::class);
