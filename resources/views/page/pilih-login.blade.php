@extends('app')

@section('content')

<meta charset="utf-8">
<style>
.pagePilih {
        margin: 50px auto;
        width: 400px;
        padding: 10px;
    }
    button[type=admin]{
        margin: 15px auto;
        width: 100%;
        padding: 10px;
    }

    button[type=user] {
        margin: 15px auto;
        width: 100%;
        padding: 10px;
    }

    .loader-wrapper {
        widht :60px;
        height :60px;
    }

    .loader {
        box-sizing :border-box;
        width :100%
        height :100%
        border :10px solid #162534;
        border-top-color : #4B7BE5
    }

</style>

<div class="container mt-5 pt-5">
    <div class="mb-3">
            @csrf
            <img src="img/logo.png" height="50" style="display:block; margin:auto;">
    </div>
</div>

<div class="pagePilih">
    <a href="{{url('login-admin')}}">
        <button type="admin" class="btn btnSignIn btn-block">Login as admin</button>
    </a>           

    <a href="{{url('login')}}">
        <button type="user" class="btn btnSignIn btn-block">Login as user</button>
    </a>
</div>




@endsection