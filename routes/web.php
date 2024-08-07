<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\OfficialsController;
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
// Route::get('/berita', function () {
//     return view('components.desa-bulusuka.berita');
// });


Route::get('/berita/detail', function () {
    return view('components.desa-bulusuka.detail-berita');
});
// Route::get('/pengumuman', function () {
//     return view('components.desa-bulusuka.pengumuman');
// });
Route::get('/pengumuman/detail', function () {
    return view('components.desa-bulusuka.detail-pengumuman');
});
Route::get('/pengumuman/{id}', [NoticesController::class, 'show'])->name('notices.show');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');
Route::resource('/berita', NewsController::class);
Route::resource('/pengumuman', NoticesController::class);
Route::resource('/aparat', OfficialsController::class);

Route::get('/', function () {
    return view('welcome');
});
