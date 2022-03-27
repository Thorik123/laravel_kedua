<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanstatisController extends Controller
{
    public function index () 
    {
        $arr = [
            'judul' => 'Halaman Statis',
            'konten' => 'Isi Konten Halaman Statis',
        ];
        return view ('halamanstatis', $arr);
    }
}
