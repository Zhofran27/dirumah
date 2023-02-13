{{-- @extends('layouts.main', ['title' => 'Artikel'])

@section('content')

<h2>Artikels</h2>

<form action="/{{ $artikel->id }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="list" value="{{ $artikel->list }}"  placeholder="The Artikel">
    <button type="submit">update</button>
</form>


@endsection --}}

@extends('dashboard.layouts.main')

@section('content')
<form action="/dashboard/artikels/{{ $artikel->id }}" method="post">
    @method('put')
    @csrf
    {{-- <tr>
        <td><input type="text" name="judul" value="{{ $artikel->judul }}"  placeholder="The Artikel"></td>
        <td><input type="text" name="kategori" value="{{ $artikel->kategori }}"  placeholder="The Artikel"></td>
        <td><input type="text" name="gambar" value="{{ $artikel->gambar }}"  placeholder="The Artikel"></td>
        <td><input type="text" name="isi" value="{{ $artikel->isi }}"  placeholder="The Artikel"></td>
        <td><button type="submit">update</button></td>
    </tr> --}}
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">judul</th>
              <th scope="col">kategori</th>
              <th scope="col">gambar</th>
              <th scope="col">isi</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
                <td><input type="text" name="judul" value="{{ $artikel->judul }}"  placeholder="The Artikel"></td>
                <td><input type="text" name="kategori" value="{{ $artikel->kategori }}"  placeholder="The Artikel"></td>
                <td><input type="text" name="gambar" value="{{ $artikel->gambar }}"  placeholder="The Artikel"></td>
                <td><input type="text" name="isi" value="{{ $artikel->isi }}"  placeholder="The Artikel"></td>
                <td><button type="submit">update</button></td>
            </tr>
            
          </tbody>
        </table>
      </div>
</form>

@endsection

{{-- <div class="table-responsive">
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
            <td><input type="text" name="judul" value="{{ $artikel->judul }}"  placeholder="The Artikel"></td>
            <td><input type="text" name="kategori" value="{{ $artikel->kategori }}"  placeholder="The Artikel"></td>
            <td><input type="text" name="gambar" value="{{ $artikel->gambar }}"  placeholder="The Artikel"></td>
            <td><input type="text" name="isi" value="{{ $artikel->isi }}"  placeholder="The Artikel"></td>
            <td><button type="submit">update</button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div> --}}

