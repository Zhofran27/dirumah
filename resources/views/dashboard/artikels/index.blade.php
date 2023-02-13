@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Artikels</h1>
</div>

<a href="/dashboard/artikels/add">add</a>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">judul</th>
        <th scope="col">kategori</th>
        <th scope="col">gambar</th>
        <th scope="col">isi</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($artikels as $index => $artikel)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $artikel->judul }}</td>
        <td>{{ $artikel->kategori }}</td>
        <td><img src="{{ $artikel->gambar }}" width="40%"></td>
        <td>{{ $artikel->isi}}</td>
        <td>
          <div>
            {{-- <form action="/dashboard/artikels" method="post">
              @csrf
              <input type="text" name="list" placeholder="The Artikel">
              <button type="submit">add</button>
          </form> --}}
          {{-- <a href="/dashboard/artikels/add">add</a> --}}
            <a style="color: skyblue" href="/dashboard/artikels/{{ $artikel->id }}/edit"> edit</a>
            <form action="/dashboard/artikels/{{ $artikel->id }}" method="post" style="display: inline">
               @csrf
               @method("delete")
               <button type="submit">delete</button>
            </form>
        </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection