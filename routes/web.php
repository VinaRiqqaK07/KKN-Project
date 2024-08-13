<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaContentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\OfficialsController;
use App\Http\Controllers\TextContentController;
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



// Route::get('/aparat', function () {
//     return view('components.desa-bulusuka.aparat-desa');
// });
// Route::get('/berita', function () {
//     return view('components.desa-bulusuka.berita');
// });


// Route::get('/berita/detail', function () {
//     return view('components.desa-bulusuka.detail-berita');
// });
// Route::get('/pengumuman', function () {
//     return view('components.desa-bulusuka.pengumuman');
// });
Route::get('/pengumuman/detail', function () {
    return view('components.desa-bulusuka.detail-pengumuman');
});
Route::get('/sejarah', [TextContentController::class, 'sejarah'])->name('text_content.sejarah');
Route::get('/visi-misi', [TextContentController::class, 'visi_misi'])->name('text_content.visi_misi');
Route::get('/struktur', [MediaContentController::class, 'struktur'])->name('media_content.struktur');
Route::get('/pengumuman/{id}', [NoticesController::class, 'show'])->name('notices.show');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');
Route::resource('/berita', NewsController::class);
Route::resource('/pengumuman', NoticesController::class);
Route::resource('/aparat', OfficialsController::class);
Route::resource('/home', HomeController::class);

Route::get('/', function () {
    return view('welcome');
});
