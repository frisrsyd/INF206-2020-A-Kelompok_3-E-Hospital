@extends('app')
@section('content')
    <div class="banner mb-3">
        <div class="profile-image shadow"></div>
        <div class="profile-info text-center mt-2">
            <h4 class="name fw-bold">Fulan bin Fulan</h4>
            <span class="text-muted">fulan@gmail.com</span>
        </div>
        <div class="container ">
            <div class="row account-container">
                <div class="col-md-6">
                    <div class="card account-management">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody class="table-body">
                                    <tr>
                                        <td>
                                            <a href="{{url('pilih-login')}}">Login</a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('signUp')}}">Sign Up</a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{ url('input-data') }}">Input Data</a> 
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
