@extends('dashboard.layouts.main')

@section('content')
<form action="/dashboard/artikels/" method="post">
    {{-- @method('put') --}}
    @csrf
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
                <td><input type="text" name="judul"   placeholder="The Artikel"></td>
                <td><input type="text" name="kategori"   placeholder="The Artikel"></td>
                <td><input type="text" name="gambar"   placeholder="The Artikel"></td>
                <td><input type="text" name="isi"   placeholder="The Artikel"></td>
                <td><button type="submit">add</button></td>
            </tr>
            
          </tbody>
        </table>
      </div>
</form>

@endsection