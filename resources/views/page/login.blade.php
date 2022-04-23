@extends('app')

@section('content')
    

    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <img src="img/logo.png" height="90" class="d-inline-block align-text-top">
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="#">Register</a> sekarang!</p>
                <p class="text-center">Lupa password? klik <a href="#">disini</a> </p>
            </form>
        </div>
    </div>
@endsection