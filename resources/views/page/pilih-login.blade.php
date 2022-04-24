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

</style>

<div class="container mt-5 pt-5">
    <div class="mb-3">
            @csrf
            <img src="img/logo.png" height="50" style="display:block; margin:auto;">
    </div>
</div>

<div class="pagePilih">
                   
    <button type="admin" class="btn btn-primary btn-block">Login as admin</button>

    <button type="user" class="btn btn-primary btn-block">Login as user</button>
    
</div>




@endsection