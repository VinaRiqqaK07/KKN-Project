<?php

namespace App\Http\Controllers;

use App\Models\Officials;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OfficialsController extends Controller
{
    //
    public function index()
    {
        $officialsList = Officials::all();

        $officialsList->each(function ($officials) {
            $url = $officials->getImageUrlOfficials();
            if ($url) {
                $officials->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $officials->imageUrl = null;
            }

            $officials->positionName = $officials->positions->name ?? null;
        });

        return view('components.desa-bulusuka.aparat-desa', compact('officialsList'));
    }
}
