@extends('app')

@section('content')
    <div class="container tool-container">
        <div class="mb-3">
            <div class="row keterangan">
                <form>
                    <label for="popularTool">Ketersediaan Alat</label>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 card form-ketersediaan shadow mb-3">
                <a href="{{ url('rekap-pinjam') }}">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody class="text-center">
                                <tr>
                                    <td class="ms-3 float-start">
                                        <p>R.S Zainal Abidin</p>
                                    </td>
                                    <td class=" tect-center">
                                        <p>tersedia</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-3 float-start">
                                        <a href="#" target="_blank">
                                            <p>maps.google.com</p>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <p>Jumlah: X buah</p>
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
