@extends('app')
@section('content')
    <div class="banner mb-3">
        <h2 class="text-center"> Daftar Akun </h2>
        <div class="container ">
            <div class="row account-container">
                <div class="col-md-5">
                    <div class="card account-management">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody class="table-body">
                                    <tr>
                                        <td>
                                            <div class="container mt-3 pt-5">
                                                <div class="row search-container">
                                                    <div class="col text-center">
                                                        <form enctype="multipart/form-data" method="POST" action="">
                                                            @csrf
                                                            
                                                            <div class="mx-5 mb-3">
                                                                <input name="name" type="text" class="form-control" placeholder="Masukkan Nama">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="nik" type="number" class="form-control" placeholder="Masukkan NIK">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="username" type="text" class="form-control" placeholder="Masukkan Username">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                                                            </div>
                                                            <div class="mx-5 mb-3">
                                                                <input name="gambar" type="file" class="form-control" placeholder="Masukkan Gambar">
                                                            </div>
                                                            <button class="btn btnSignIn mb-md-4 shadow" type="submit">Sign Up</button>
                                                            <div><a href="{{ '#' }}" class="btn" style="color: blue">Login Here</a></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
