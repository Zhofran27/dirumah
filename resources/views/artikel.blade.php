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
     <li>{{ $index + 1 }} - {{ $artikel->list }}</li>   
    @endforeach
</ul>

@endsection

