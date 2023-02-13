@extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Artikels</h2>

{{-- <form action="/" method="post">
    @csrf
    <input type="text" name="list" placeholder="The Artikel">
    <button type="submit">add</button>
</form> --}}

<ul style="list-style-type: none">
    
    {{-- @foreach ($artikels as $index => $artikel)
     <li style="margin-bottom: 15px">
         {{ $index + 1 }} - {{ $artikel->judul }} 
        <div>
            <a style="color: skyblue" href="/{{ $artikel->id }}/edit"> edit</a>
            <form action="/{{ $artikel->id }}" method="post" style="display: inline">
               @csrf
               @method("delete")
               <button type="submit">delete</button>
            </form>
        </div>
    </li> 
    @endforeach --}}
    {{-- @foreach ($artikels as $index => $artikel)
        <tr>
          <td>{{ $index + 1 }} - </td>
          <td>{{ $artikel->judul }}</td>
          <td>{{ $artikel->gambar }}</td>
          <td>{{ $artikel->isi}}</td>
        </tr>
        @endforeach --}}
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

