@extends('layouts.main')

@section('content')

<main class="form-signin  m-auto w-100 text-center" >
  <form action="/postlogin" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  </form>
</main>

@endsection