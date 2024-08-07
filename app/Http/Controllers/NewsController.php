<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data News dan muat relasi publisher
        $newsList = News::where('status', 1)->get();

        // Menambahkan URL gambar dan nama publisher ke setiap News
        $newsList->each(function ($news) {
            //dd($news->content);
            $url = $news->getImageUrlNews();
            if ($url) {
                $news->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $news->imageUrl = null;
            }

            // Tambahkan nama publisher
            $news->publisherName = $news->publisher->name ?? null;

        });

        return view('components.desa-bulusuka.berita', compact('newsList'));
    }

    public function show($id)
    {
        $news = News::find($id);
        $url = $news->getImageUrlNews();
        $news->imageUrl = $url ? Str::replaceFirst(config('app.url') . '/storage', 'storage', $url) : null;
        
        // Tambahkan nama publisher
        $news->publisherName = $news->publisher->name ?? null;

        return view('components.desa-bulusuka.detail-berita', compact('news'));



    }
}
