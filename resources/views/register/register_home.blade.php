@extends('index')

@section('Input')

<style>

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>

<main class="form-signin w-100 m-auto">
    <form action="/register" method="post">
        @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
        <label for="username">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email Address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      <small class="d-block text-center mt-3">Already Registered ? <a href="/login">Login Now</a>
      </small>
      <p class="mt-5 mb-3 text-muted text-center">&copy; krisna hadi saputra</p>
    </form>
  </main>



@endsection
