<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index () 
    {
        $arr = [
            'judul' => 'Agenda',
            'konten' => 'Isi Konten Agenda',
        ];
    return view ('agenda', $arr);
    }
}
