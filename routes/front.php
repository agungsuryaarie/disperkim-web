<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HalamanProfilController;
use App\Http\Controllers\LayananPublikController;
use App\Http\Controllers\BeritaFrontController;
use App\Http\Controllers\MediaController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
Route::get('/media/foto', [MediaController::class, 'index'])->name('media.index');
Route::get('/media/foto/detail/{id}', [MediaController::class, 'show'])->name('media.show');
Route::get('/media/video', [MediaController::class, 'video'])->name('media.video');
Route::get('/media/video/{video:slug}', [MediaController::class, 'showv'])->name('video.show');
Route::get('/berita', [BeritaFrontController::class, 'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaFrontController::class, 'show'])->name('berita.show');
Route::get('/berita_dinas', [BeritaFrontController::class, 'dinas'])->name('berita.dinas');
Route::get('/berita_pemerintahan', [BeritaFrontController::class, 'pemerintahan'])->name('berita.pemerintahan');
Route::get('/berita_nasional', [BeritaFrontController::class, 'nasional'])->name('berita.nasional');
Route::get('/profil/{slug}', [HalamanProfilController::class, 'index'])->name('halamanprofil.index');
Route::get('/layanan/{slug}', [LayananPublikController::class, 'index'])->name('layananpublik.index');
