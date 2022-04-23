@extends('app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row search-container">
            <div class="col-md-6">
                <form enctype="multipart/form-data" method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <small for="image" class="keterangan">Input Data</small>
                        <input id="image" name="image" type="file" class="form-control mt-2" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <select id="toolName" name="toolName" class="form-select form-control">
                            <option selected >Pilih jenis alat</option>
                            <option value="stetoskop">Stetoskop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input name="location" type="url" class="form-control" placeholder="Link Google Maps">
                    </div>
                    <div class=" mb-3 form-control shadow col">
                        <p class="float-start ms-2" style="margin-top:0.3em ">Jumlah</p>
                        <div class="counter float-end me-2">
                            <a class="searchIcon" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                {{-- <img src="img/search.png" alt=""> --}}
                                <i class="bi bi-dash" style="color: #333333"></i>
                            </a>
                            <input name="jumlahPinjam" type="number" class="jmlhBox text-center" placeholder="0" min="0">
                            <a class="searchIcon" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                {{-- <img src="img/search.png" alt=""> --}}
                                <i class="bi bi-plus" style="color: #333333"></i>
                            </a>
                        </div>
                    </div>
                    <button class="btn btnSignIn mb-md-5 shadow" type="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
