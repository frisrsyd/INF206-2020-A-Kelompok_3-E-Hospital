@extends('app')

@section('content')

    <div class="container mt-5 pt-5">
        <div class="col-md-4 col-md-offset-4">
            <div class="mb-3">
                    @csrf
                    <img src="img/logo.png" height="50" style="display:block; margin:auto;">
                    </div>
                    <hr>
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
                <p> </p>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <p> </p>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="#" style="color: blue ">Register</a> sekarang!</p>
                <p class="text-center">Lupa password? klik <a href="#" style="color: blue">disini</a> </p>
             </form>
        </div>
    </div>


@endsection
