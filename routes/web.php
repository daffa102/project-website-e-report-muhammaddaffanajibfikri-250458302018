<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Features;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', Features\Dashboard::class)->name('admin.dashboard');
    Route::get('/list-laporan', Features\ListLaporan::class)->name('admin.list-laporan');
    Route::get('/list-warga', Features\ListWarga::class)->name('admin.list-warga');
    Route::get('/profile', Features\MyProfile::class)->name('admin.profile');
});

Route::middleware('auth')->prefix('warga')->group(function () {
    Route::get('/', Features\warga\Dashboard::class)->name('warga.dashboard');
    //CRUD Laporan
    Route::get('/laporan', Features\warga\Laporan::class)->name('warga.laporan');
    Route::get('/laporan/create', Features\warga\Laporan\CreateLaporan::class)->name('warga.create-laporan');
    Route::get('/laporan/edit/{id}', Features\warga\Laporan\EditLaporan::class)->name('warga.edit-laporan');

    Route::get('/profile', Features\warga\Profile::class)->name('warga.profile');
});