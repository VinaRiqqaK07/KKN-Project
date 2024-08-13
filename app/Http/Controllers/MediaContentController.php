<?php

namespace App\Http\Controllers;

use App\Models\MediaContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediaContentController extends Controller
{
    //
    public function struktur()
    {
        $struktur_organisasi = MediaContent::where('type', 'struktur')->get();
        $struktur_organisasi->each(function ($str) {
            $url = $str->getImageUrl();
            
            if ($url) {
                $str->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $str->imageUrl = null;
            }
            
        });
        
        return view('components.desa-bulusuka.struktur', compact('struktur_organisasi'));
    }
}
