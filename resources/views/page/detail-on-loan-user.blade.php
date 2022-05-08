@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Details On Loan</label>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

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
                                        <p>Rincian alat yang dipinjam:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Nama Alat:</p>
                                    </td>
                                    <td>
                                        <p>Stetoskop</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>No. Pinjam</p>
                                    </td>
                                    <td>
                                        <p>230522001</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Nama Peminjam:</p>
                                    </td>
                                    <td>
                                        <p>Fulan bin fulan</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Tanggal Pinjam:</p>
                                    </td>
                                    <td>
                                        <p>23-05-2022</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Tanggal Kembali:</p>
                                    </td>
                                    <td>
                                        <p>25-05-2022</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Lokasi Peminjaman:</p>
                                    </td>
                                    <td>
                                        <p>R.S Zainal Abidin </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Link Lokasi Peminjaman:</p>
                                    </td>
                                    <td>
                                        <a href="#" target="_blank">
                                            <p>maps.google.com/....</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="2">
                                        <p>Sisa Waktu Pengembalian:</p>
                                        <p id="waktu-pengembalian">23:59:59</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btnSignIn mb-md-4 shadow" type="submit">Cetak Bukti</button>
                </div>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
@endsection
