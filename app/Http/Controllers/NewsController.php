<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Helpers\HtmlHelpers;

class NewsController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data News dan muat relasi publisher
        $newsList = News::where('status', 1)->orderBy('created_at', 'desc')->get();

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
            // Tambahkan konten terbatas
            $news->limitedContent = HtmlHelpers::limitHtmlContent($news->content, 50);
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

        // Ambil semua data News dan muat relasi publisher
        $newsList = News::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        // Menambahkan URL gambar dan nama publisher ke setiap News
        $newsList->each(function ($new) {
            //dd($news->content);
            $url = $new->getImageUrlNews();
            if ($url) {
                $new->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $new->imageUrl = null;
            }

            // Tambahkan nama publisher
            $new->publisherName = $new->publisher->name ?? null;
            // Tambahkan konten terbatas
            $new->limitedContent = HtmlHelpers::limitHtmlContent($new->content, 30);
        });

        return view('components.desa-bulusuka.detail-berita', compact('news', 'newsList'));



    }
}
