<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index () 
    {
        $arr = [
            'judul' => 'Album',
            'konten' => 'Isi Konten Album',
        ];
        return view ('album', $arr);
    }
}
