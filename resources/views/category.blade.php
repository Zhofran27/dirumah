@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Category : {{ $category }}</h2>

<ul style="list-style-type: none">
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">judul</th>
              <th scope="col">Category</th>
              <th scope="col">gambar</th>
              <th scope="col">isi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($artikels as $index => $artikel)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $artikel->judul }}</td>
              <td><a href="/categories/{{ $artikel->category->slug }}">{{ $artikel->category->name }}</a></td>
              <td><img src="{{ $artikel->gambar }}" width="20%"></td>
              <td>{{ $artikel->isi}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</ul>

@endsection
