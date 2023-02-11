@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Artikels</h2>

<ol>
    @foreach ($artikels as $artikel)
     <li>{{ $artikel->list }}</li>   
    @endforeach
</ol>

@endsection

