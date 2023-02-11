@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Artikels</h2>

<form action="/{{ $artikel->id }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="list" value="{{ $artikel->list }}"  placeholder="The Artikel">
    <button type="submit">update</button>
</form>


@endsection

