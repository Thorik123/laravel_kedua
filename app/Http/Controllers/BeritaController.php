<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index ()
    {
        $arr = [
            'judul' => 'Berita',
            'konten' => 'Isi Konten Berita',
        ];
        return view('berita', $arr);
    }
}
