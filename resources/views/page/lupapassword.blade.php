@extends('app')
@section('content')
    <div class="banner mb-3">
        <h2 class="text-center"> Lupa Password </h2>
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
                                                                <input name="email" type="text" class="form-control" placeholder="Masukkan Email">
                                                            </div>
                                                            <button class="btn btnSignIn mb-md-4 shadow" type="submit">Kirim Code</button>
                                                            <div class="mx-5 mb-3">
                                                                <input name="password" type="password" class="form-control" placeholder="Masukkan Code Verifikasi">
                                                            </div>
                                                            <button class="btn btnSignIn mb-md-4 shadow" type="submit">Next</button>
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
