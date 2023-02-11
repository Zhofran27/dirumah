<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('Artikel', [
            'artikels' => DB::table('artikels')->get(),
        ]);
    }

    // public function gabut()
    // {
    //     return view('artikel');
    // }
}
