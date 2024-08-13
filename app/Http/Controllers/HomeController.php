<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\Notices;
use App\Models\Officials;
use App\Helpers\HtmlHelpers;
use App\Models\MediaContent;

class HomeController extends Controller
{
    //
    
    public function index()
    {
        $banners = MediaContent::where('type', 'banner')->get();
        $banners->each(function ($banner) {
            $url = $banner->getImageUrl();
            if ($url) {
                $banner->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $banner->imageUrl = null;
            }
        });

        // Ambil semua data News dan muat relasi publisher
        $newsList = News::where('status', 1)->orderBy('created_at', 'desc')->take(2)->get();

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

        //Ambil Notice List
        $noticesList = Notices::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $noticesList->each(function ($notices) {
            $url = $notices->getImageUrlNotices();
            if ($url) {
                $notices->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $notices->imageUrl = null;
            }

            $notices->publisherName = $notices->publisher->name ?? null;
        });

        // Aparat Desa
        $officialsList = Officials::all();

        $officialsList->each(function ($officials) {
            $url = $officials->getImageUrlOfficials();
            if ($url) {
                $officials->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $officials->imageUrl = null;
            }

            $officials->positionName = $officials->positions->position_name ?? null;
        });

        return view('components.desa-bulusuka.home', compact('banners', 'newsList', 'noticesList', 'officialsList'));
    }


}
