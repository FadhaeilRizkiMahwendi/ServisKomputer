<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\User\BarangsController;
use App\Http\Controllers\User\CustomersController;
use App\Http\Controllers\User\KeluhansController;
use App\Http\Controllers\User\KomputersController;
use App\Http\Controllers\User\PegawaisController;
use App\Http\Controllers\User\SuppliersController;

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
});

Route::resource('customer', CustomerController::class)->middleware(['auth', 'admin']);
Route::resource('komputer', KomputerController::class)->middleware(['auth', 'admin']);
Route::resource('pegawai', PegawaiController::class)->middleware(['auth', 'admin']);
Route::resource('keluhan', KeluhanController::class)->middleware(['auth', 'admin']);
Route::resource('barang', BarangController::class)->middleware(['auth', 'admin']);
Route::resource('supplier', SupplierController::class)->middleware(['auth', 'admin']);

Route::get('customers', [CustomersController::class, 'index'])->middleware(['auth', 'verified'])->name('customers');
Route::get('komputers', [KomputersController::class, 'index'])->middleware(['auth', 'verified'])->name('komputers');
Route::get('pegawais', [PegawaisController::class, 'index'])->middleware(['auth', 'verified'])->name('pegawais');
Route::get('keluhans', [KeluhansController::class, 'index'])->middleware(['auth', 'verified'])->name('keluhans');
Route::get('barangs', [BarangsController::class, 'index'])->middleware(['auth', 'verified'])->name('barangs');
Route::get('suppliers', [SuppliersController::class, 'index'])->middleware(['auth', 'verified'])->name('suppliers');

require __DIR__ . '/auth.php';

route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin'])->name('admindashboard');
