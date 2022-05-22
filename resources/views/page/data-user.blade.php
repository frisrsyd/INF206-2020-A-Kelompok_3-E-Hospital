@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Data User</label>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @foreach ($data_user as $item)
                <div class=" card detail-control shadow mb-3">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-center" colspan="2">
                                        <strong>Details</strong>
                                        <hr>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Rincian informasi user:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Username : </p>
                                    </td>
                                    <td>
                                        <p>{{$item['username']}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>NIK :</p>
                                    </td>
                                    <td>
                                        <p>{{$item['nik']}}</p>
                                    </td>
                                </tr>   
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>E-mail :</p>
                                    </td>
                                    <td>
                                        <p>{{$item['email']}}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
                </div>
                <div class="text-center">
                    <p class="text-center" style="color: black"><a href="{{ url('history-pinjam') }}"
                        style="color: blue">Riwayat peminjaman sebelumnya</a> </p>
                </div>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
@endsection
