<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kantin">
    <meta name="author" content="Eskepok">
    <title>Register</title>
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/auth.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>
      <form class="user" method="post" action="{{ route('register') }}">
        @csrf
        <div class="txt_field">
          <input type="text" name="name" required />
          <span></span>
          <label>Name</label>
        </div>
        <div class="txt_field">
          <input type="text" name="email" required />
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required />
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Register" />
        <div class="signup_link">Already have an account? <a href="{{ route('login') }}">Sign Up</a></div>
      </form>
    </div>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/ruang-admin.min.js')}}"></script>
  </body>
</html>
