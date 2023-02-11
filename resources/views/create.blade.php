@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Create NewArtikels</h2>

<form action="/" method="post">
    @csrf
    <input type="text" name="list" placeholder="The Artikel">
    <button type="submit">add</button>
</form>

@endsection

