@extends('app')

@section('content')

<style type="text/css">
    .login {
        margin: 50px auto;
        width: 400px;
        padding: 10px;
    }
    input[type=email]{
        margin: 15px auto;
        width: 100%;
        padding: 10px;
    }

    input[type=password] {
        margin: 15px auto;
        width: 100%;
        padding: 10px;
    }

</style>
    <div class="container mt-5 pt-5">
            <div class="mb-3">
                    @csrf
                    <img src="img/logo.png" height="50" style="display:block; margin:auto;">
                    </div>
<div class="login">
    @if(session('error'))
    <div class="alert alert-danger">
   <b>Opps!</b> {{session('error')}}
    </div>

   @endif
   <form method="post">
   @csrf

   <div class="form-group">                   
   <input type="email" name="email" class="form-control" placeholder="Email" required="">
</div>

<div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password" required="">
</div>

<p> </p>
<center><button type="submit" class="btn btnSignIn btn-block">Log In</button></center>
<hr>
<p class="text-center" style="color: black">Belum punya akun? <a href="{{url('signUp')}}" style="color: blue">Register</a> sekarang!</p>
<p class="text-center" style="color: black">Lupa password? klik <a href="{{url('lupapassword')}}" style="color: blue">disini</a> </p>
</form>
</div>
</div>



@endsection