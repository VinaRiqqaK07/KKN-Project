<?php

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
Route::get('/test', function () {
    return view('components.playground');
});

Route::get('/home', function () {
    return view('components.desa-bulusuka.home');
});
Route::get('/visi-misi', function () {
    return view('components.desa-bulusuka.visi-misi');
});
Route::get('/sejarah', function () {
    return view('components.desa-bulusuka.sejarah-desa');
});
Route::get('/struktur', function () {
    return view('components.desa-bulusuka.struktur');
});
Route::get('/aparat', function () {
    return view('components.desa-bulusuka.aparat-desa');
});
Route::get('/berita', function () {
    return view('components.desa-bulusuka.berita');
});
Route::get('/berita/detail', function () {
    return view('components.desa-bulusuka.detail-berita');
});
Route::get('/pengumuman', function () {
    return view('components.desa-bulusuka.pengumuman');
});
Route::get('/pengumuman/detail', function () {
    return view('components.desa-bulusuka.detail-pengumuman');
});

Route::get('/', function () {
    return view('welcome');
});
