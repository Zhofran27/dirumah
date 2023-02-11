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

    public function edit($id)
    {
        $artikel = DB::table('artikels')->where('id', $id)->first();
        return view('edit', ['artikel' => $artikel]);
    }

    public function update(Request $request, $id)
    {
        DB::table('artikels')->where('id', $id)->update(['list' => $request->list ]);
        return redirect("/");
    }

    public function destroy($id)
    {
        DB::table('artikels')->where('id', $id)->delete();
        return back();
    }
}
