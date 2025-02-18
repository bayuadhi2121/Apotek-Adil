@extends('layout.layout')

@section('content')
<div class="container col-xl-10 px-4 py-5">
    <div class="row g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6 text" style="margin-top: 0;">
            <p class="display-5 fw-bold mb-3" style="font-size:35px">Profil Saya</p>
            <div class="con">
                <form action="{{ route('profile.update',['profile'=>auth()->user()->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                        <label for="disabledTextInput" class="form-label">Nama Lengkap</label>
                        <input type="text" id="disabledTextInput" class=" inputProfil form-control" name="nama"
                            value="{{ auth()->user()->nama }}">
                    </div>
                    <div class="mb-1">
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <input type="text" value="{{ auth()->user()->alamat }}" id="disabledTextInput"
                            class=" inputProfil form-control" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">No Handphone</label>
                        <input type="text" value="{{ auth()->user()->hp }}" id="disabledTextInput"
                            class=" inputProfil form-control" name="hp">
                    </div>
                    <button type="submit" class="btn btn-primary button-submit">Submit</button>

                </form>

                <!-- <a class=" btn btn-labeled btn-primary cari" href="">Resep</a>
                <a class="btn btn-outline-primary resep" href="">
                    Upload Resep
                </a> -->
            </div>
        </div>

        <div class="col-lg-6 gambar" style="margin-top: 3;">
            <img src="{{asset('image/profilep.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                width="700" height="500" loading="lazy" />
        </div>
    </div>

    <br>
</div>

@stop