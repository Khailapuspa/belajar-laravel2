<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Layout');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route khusus untuk admin
Route::middleware('auth', 'admin')->group(function () {
    Route::get('/admin', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Route khusus untuk user
Route::middleware('auth', 'user')->group(function () {
    Route::get('/user', function() {
        return view('layout');
    })->name('layout');
});

Route::get('berita',[BeritaController::class,'index']);
Route::post('berita/tambah',[BeritaController::class,'tambah']);
Route::post('berita/hapus',[BeritaController::class,'hapus']);
Route::post('berita/edit',[BeritaController::class,'edit']);

Route::get('kontak',[KontakController::class,'index']);


Route::get('profile',[ProfileController::class,'index']);
