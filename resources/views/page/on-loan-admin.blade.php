@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Alat yang sedang dipinjam dari rumah sakit AAA</label>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-on-loan-admin') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Tanggal Pengembalian : 25-5-2022</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-on-loan-admin') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Tanggal Pengembalian : 25-5-2022</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-on-loan-admin') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Tanggal Pengembalian : 25-5-2022</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('detail-on-loan-admin') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Stetoskop</p>
                                    </td>
                                    <td>
                                        <p>Tanggal Pengembalian : 25-5-2022</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#">
                                            <p>Jumlah: X buah</p>
                                        </a>
                                    </td>
                                    <td>
                                        <p style="color: blue">Details...</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
@endsection
