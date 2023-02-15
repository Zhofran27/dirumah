@extends('layouts.main', ['title' => 'Artikel'])

@section('content')


{{-- <form action="/" method="post">
    @csrf
    <input type="text" name="list" placeholder="The Artikel">
    <button type="submit">add</button>
</form> --}}

{{-- <ul style="list-style-type: none"> --}}
    
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
        {{-- <div class="table-responsive">
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
          </div> --}}
{{-- </ul> --}}


<div class="container text-center">
<div class="container mt-4">
@foreach ($artikels as $index => $artikel)

  <div class="col-md-4">
    <img src="{{ $artikel->gambar }}">
    <a href="#"><h3>{{ $artikel->judul }}</h3></a>
    <p>{{ $artikel->isi}}</p>

</div>
@endforeach
</div>
</div>

{{-- <div class="container-fluid pt-5 pb-5">
  @foreach
	<div class="container text-center">
		<h2>Artikel</h2>
		<small>Artikel asoy</small>
		<div class="row pt-4">
			
	
			@endforeach
		</div>
	</div>
</div> --}}
{{-- <div class="w3-row">
<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  @foreach ($artikels as $index => $artikel)
  <div class="w3-card-4 w3-margin w3-white">
   <img src="{{ $artikel->gambar }}" alt="Nature" style="width:30%">
   <div class="w3-container">
   <h3><b>{{ $artikel->judul }}</b></h3>
   <h5>{{ $artikel->isi }}</h5>
   </div>
  </div>
  @endforeach
</div>
</div> --}}


@endsection




{{-- <div class="container-fluid beranda pt-5 pb-5">
	<div class="container text-center">
		<h2 class="display-3" id="home">Login to continue</h2>
		<p>or continue as <a href="/list">guest</a></p>
		<div class="row pt-4">
			<div class="col-md-4">
				<img src="cosgan.jpg" width="200" height="200">
				<a href="#"><h3>Pakaian</h3></a>
				<p>Banyak baju-baju keren yang membuatmu makin terlihat kece!</p>
			</div>
			<div class="col-md-4">
				<img src="asgan.jpg" width="200" height="200">
				<a href="#"><h3>Mainan & Hobi</h3></a>
				<p>Anak rewel? Beliin mainan lah! Bukan diomelin!</p>
			</div>
			<div class="col-md-4">
				<img src="lampnyu.jpg" width="200" height="200">
				<a href="#"><h3>Alat Elektronik</h3></a>
				<p>Penuhi kebutuhanmu di sini!</p>
			</div>
			<div class="col-md-4">
				<img src="sdyu.png" width="200" height="200">
				<a href="#"><h3>Makanan & Minuman</h3></a>
				<p>Daripada kelaparan nungguin disuruh makan sama ayang, mending pesan sekarang di sini!</p>
			</div>
			<div class="col-md-4">
				<img src="oganyu.jpg" width="200" height="200">
				<a href="#"><h3>Lainnya</h3></a>
				<p>Topup game, isi ulang pulsa...</p>
			</div>
		</div>
	</div>
</div> --}}

