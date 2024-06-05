<?php

use App\Http\Controllers\AktaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\JenisAktaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified'])->name('profile');


Route::middleware('auth')->group(function () {
    Route::get('/Dokumen-Index', [DokumenController::class, 'index'])->name('Dokumen-Index');
    Route::post('/Dokumen-Store/{id}', [DokumenController::class, 'store'])->name('Dokumen-Store');
    Route::put('/Dokumen-Update/{id}', [DokumenController::class, 'update'])->name('Dokumen-Update');
    Route::delete('/Dokumen-Delete/{id}', [DokumenController::class, 'destroy'])->name('Dokumen-Delete');
})->middleware(['auth', 'verified'])->name('Dokumen');




Route::middleware('auth')->group(function () {
    Route::get('/Rekap-Index', [RekapController::class, 'index'])->name('Rekap-Index');
    Route::post('/Rekap-Store', [RekapController::class, 'store'])->name('Rekap-Store');
    Route::put('/Rekap-Update/{id}', [RekapController::class, 'update'])->name('Rekap-Update');
    Route::delete('/Rekap-Delete/{id}', [RekapController::class, 'destroy'])->name('Rekap-Delete');
})->middleware(['auth', 'verified'])->name('Rekap');


Route::middleware('auth')->group(function () {
    Route::get('/Akta-Index', [AktaController::class, 'index'])->name('Akta-Index');
    Route::post('/Akta-Store', [AktaController::class, 'store'])->name('Akta-Store');
    Route::put('/Akta-Update/{id}', [AktaController::class, 'update'])->name('Akta-Update');
    Route::delete('/Akta-Delete/{id}', [AktaController::class, 'destroy'])->name('Akta-Delete');
})->middleware(['auth', 'verified'])->name('Akta');


Route::middleware('auth')->group(function () {

    Route::get('/Jenis-Akta-Index', [JenisAktaController::class, 'index'])->name('Jenis-Akta-Index');
    Route::post('/Jenis-Akta-Store', [JenisAktaController::class, 'store'])->name('Jenis-Akta-Store');
    Route::put('/Jenis-Akta-Update/{id}', [JenisAktaController::class, 'update'])->name('Jenis-Akta-Update');
    Route::delete('/Jenis-Akta-Delete/{id}', [JenisAktaController::class, 'destroy'])->name('Jenis-Akta-Delete');
    Route::get('/Jenis-Akta-Notaris-Index', [JenisAktaController::class, 'AktaNotaris'])->name('Jenis-Akta-Notaris');
    Route::get('/Jenis-Akta-PPAT-Index', [JenisAktaController::class, 'AktaPPAT'])->name('Jenis-Akta-PPAT');
})->middleware(['auth', 'verified'])->name('Jenis-Akta');


Route::middleware('auth')->group(function () {

    Route::get('/User-Index', [UserController::class, 'index'])->name('User-Index');
    Route::post('/User-Store', [UserController::class, 'store'])->name('User-Store');
    Route::put('/User-Update/{id}', [UserController::class, 'update'])->name('User-Update');
    Route::delete('/User-Delete/{id}', [UserController::class, 'destroy'])->name('User-Delete');
})->middleware(['auth', 'verified'])->name('User');





require __DIR__.'/auth.php';
