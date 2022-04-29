@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Syarat dan Ketentuan Peminjaman</label>
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
                                        <p>Tabung Oksigen</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>No. Pinjam</p>
                                    </td>
                                    <td>
                                        <p>11111111</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Nama Peminjam:</p>
                                    </td>
                                    <td>
                                        <p>Fulan</p>
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
                                        <p>Syarat dan Ketentuan:</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>Setiap kali peminjaman diberi tenggat waktu yang telah ditentukan oleh pengguna/peminjam yang tidak boleh melebihi batas waktu yang telah ditetapkan, dan peminjam harus mengembalikan alat medis yang dipinjam sesuai tanggal pengembalian yang ditetapkan; </p>
                                        <p>Apabila pengembalian melebihi tanggal yang ditetapkan, maka dikategorikan TERLAMBAT, dan setiap keterlambatan dikenakan sanksi;</p>
                                        <p>Setiap peminjam wajib memperlakukan alat yang dipinjamkan dengan sebaik-baiknya, sehingga alat tidak rusak;</p>
                                        <p>Apabila terjadi kerusakan/kehilangan alat medis yang dipinjam, maka peminjam wajib akan dikenakan sanksi;</p>
                                        <p>Peminjam yang tidak dapat mentaati peraturan dan tata tertib peminjaman,dapat di blacklist/banned akun sehinnga tidak dapat melakukan peminjaman alat lagi.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="2">
                                        <input type="checkbox" name="centang" value="centangSyarat">Saya menyetujui S&K yang berlaku<br>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btnSignIn mb-md-4 shadow" type="submit">Konfirmasi>></button>
                </div>
            </div>
            <div class="w-100 d-none d-md-block"></div>
        </div>
    </div>
@endsection
