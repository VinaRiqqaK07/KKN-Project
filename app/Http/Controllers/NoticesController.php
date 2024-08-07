<?php

namespace App\Http\Controllers;

use App\Models\Notices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NoticesController extends Controller
{
    //
    public function index()
    {
        $noticesList = Notices::where('status', 1)->get();

        $noticesList->each(function ($notices) {
            $url = $notices->getImageUrlNotices();
            if ($url) {
                $notices->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $notices->imageUrl = null;
            }

            $notices->publisherName = $notices->publisher->name ?? null;
        });

        return view('components.desa-bulusuka.pengumuman', compact('noticesList'));
    }

    public function show($id) 
    {
        $notices = Notices::find($id);
        $url = $notices->getImageUrlNotices();
        $notices->imageUrl = $url ? Str::replaceFirst(config('app.url') . '/storage', 'storage', $url) : null;

        $notices->publisherName = $notices->publisher->name ?? null;
        return view('components.desa-bulusuka.detail-pengumuman', compact('notices'));
    }
}
