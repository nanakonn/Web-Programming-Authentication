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
    <form action="/login" method="post">
        @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email Address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit"> Login</button>
      <a href="login/google" class="w-100 btn btn-lg btn-primary mt-3">Google</a>
      <small class="d-block text-center mt-3">Not Registered <a href="/register">Register Now</a>
      </small>
      <p class="mt-5 mb-3 text-muted text-center">&copy; krisna hadi saputra</p>
    </form>
  </main>




@endsection
