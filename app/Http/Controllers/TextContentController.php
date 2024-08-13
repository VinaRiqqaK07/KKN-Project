<?php

namespace App\Http\Controllers;

use App\Models\TextContent;
use Illuminate\Http\Request;

class TextContentController extends Controller
{
    //
    public function visi_misi()
    {
        $visi_misi = TextContent::where('type', 'visi-misi')->get();
        return view('components.desa-bulusuka.visi-misi', compact('visi_misi'));
    }

    public function sejarah()
    {
        $sejarah = TextContent::where('type', 'sejarah')->get();
        return view('components.desa-bulusuka.sejarah-desa', compact('sejarah'));
    }
}
