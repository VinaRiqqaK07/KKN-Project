<?php

namespace App\Http\Controllers;

use App\Helpers\HtmlHelpers;
use App\Models\Notices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticesController extends Controller
{
    //
    public function index()
    {
        $noticesList = Notices::where('status', 1)->orderBy('created_at', 'desc')->get();

        $noticesList->each(function ($notices) {
            $url = $notices->getImageUrlNotices();
            if ($url) {
                $notices->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $notices->imageUrl = null;
            }

            $notices->publisherName = $notices->publisher->name ?? null;
            $notices->limitedContent = HtmlHelpers::limitHtmlContent($notices->content, 50);
        });

        return view('components.desa-bulusuka.pengumuman', compact('noticesList'));
    }

    public function show($id) 
    {
        $notices = Notices::find($id);
        $url = $notices->getImageUrlNotices();
        $notices->imageUrl = $url ? Str::replaceFirst(config('app.url') . '/storage', 'storage', $url) : null;

        $notices->publisherName = $notices->publisher->name ?? null;

        // Mengambil 3 Pengumuman Terbaru
        $recentNotices = Notices::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        $recentNotices->each(function ($notice) {
            $url = $notice->getImageUrlNotices();
            if ($url) {
                $notice->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $notice->imageUrl = null;
            }

            $notice->publisherName = $notice->publisher->name ?? null;
        });

        return view('components.desa-bulusuka.detail-pengumuman', compact('notices', 'recentNotices'));
    }
}
