<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index () 
    {
        $arr = [
            'judul' => 'Modul',
            'konten' => 'Isi Konten Modul',
        ];
        return view ('modul', $arr);
    }
}
