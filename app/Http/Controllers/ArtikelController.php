<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('Artikel', [
            'artikels' => DB::table('artikels')->orderBy('id', 'desc')->get(),
        ]);
    }


    public function store(Request $request)
    {
        DB::table('artikels')->insert([
            'list' => $request->list,
        ]);

        return back();
    }
}
