<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('Artikel', [
            'artikels' => Artikel::orderBy('id', 'desc', 'image')->get(),
        ]);
    }


    // public function store(Request $request)
    // {
    //     Artikel::create(['list' => $request->list, ]);

    //     return back();
    // }

    // public function edit($id)
    // {
    //     $artikel = Artikel::find($id);
    //     return view('edit', ['artikel' => $artikel]);
    // }

    // public function update(Request $request, $id)
    // {
    //     Artikel::find($id)->update(['list' => $request->list ]);
    //     return redirect("/");
    // }

    // public function destroy($id)
    // {
    //     Artikel::find($id)->delete();
    //     return back();
    // }
}
