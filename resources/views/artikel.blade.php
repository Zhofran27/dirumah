@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Artikels</h2>

<form action="/" method="post">
    @csrf
    <input type="text" name="list" placeholder="The Artikel">
    <button type="submit">add</button>
</form>

<ul style="list-style-type: none">
    
    @foreach ($artikels as $index => $artikel)
     <li style="margin-bottom: 15px">
         {{ $index + 1 }} - {{ $artikel->list }} 
        <div>
            <a style="color: skyblue" href="/{{ $artikel->id }}/edit"> edit</a>
            <form action="/{{ $artikel->id }}" method="post" style="display: inline">
               @csrf
               @method("delete")
               <button type="submit">delete</button>
            </form>
        </div>
    </li> 

    @endforeach
</ul>

@endsection

