<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index () 
    {
        $arr = [
            'judul' => 'Kategori',
            'konten' => 'Isi Konten Kategori',
        ];
        return view ('kategori', $arr);
    }
}
