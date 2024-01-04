@extends('layout.layout')

@section('content')
<div class="py-3 bg-dark-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-white">
                    <span class="heading-xxs letter-spacing-xl"
                        style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 300; letter-spacing: 0.5px">Verifikasi
                        resep akan dilakukan setiap hari pada pukul 09:00 - 21:00, jika terlewat akan dilakukan pada
                        keesokan harinya </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container col-xl-9 px-4 py-5">
    <div class="row py-3 border-bottom">
        <div class="d-flex">
            <button type="button" class="btn btn-primary py-3" style="background-color: #E46A25" id="modalButton"
                data-bs-toggle="modal" data-bs-target="#modalku">Upload
                Resep
                Disini</button>
        </div>
    </div>

    <div class="row py-3">
        <div class="button-transaksi grid gap-">
            <a href="{{ route('resep.index') }}" type="button"
                class="btn btn-outline-secondary {{ request('category') == null ? ' active' : '' }}">Semua</a>
            <a href="{{ route('resep.index', ['category' => 'Diterima']) }}" type="button"
                class="btn btn-outline-secondary {{ request('category') == 'Diterima' ? ' active' : '' }}">Diterima</a>
            <a href="{{ route('resep.index', ['category' => 'Ditolak']) }}" type="button"
                class="btn btn-outline-secondary {{ request('category') == 'Ditolak' ? ' active' : '' }}">Ditolak</a>
            <a href="{{ route('resep.index', ['category' => 'Ditinjau']) }}" type="button"
                class="btn btn-outline-secondary {{ request('category') == 'Ditinjau' ? ' active' : '' }}">Ditinjau</a>

        </div>
    </div>
    <div class="py-3 d-grid ">

        <div class="row row-cols-2 gap-4">
            @php
            $status="";
            @endphp
            @forelse ($resep as $item)
            <div class="cardtrx py-3 col-md-5 col-12 ">
                <div class="d-flex justify-content-between ">
                    <div class="align-items-ce">
                        <span class="h4" style="">Resep</span>
                    </div>
                    @if($item->status == 'Ditolak')
                    @php $status = "bg-danger"; @endphp
                    @elseif($item->status == 'Diterima')
                    @php $status = "bg-succes"; @endphp
                    @else
                    @php $status = "bg-warning"; @endphp
                    @endif
                    <div class="{{ $status }} rounded-pill align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status text-white">{{ $item->status }}</span>
                    </div>
                </div>
                <div class="" style="font-size: 10px;">
                    {{-- <span class="text-secondary">9 juli 2023, 02.50</span> --}}
                </div>

                <div class="d-flex justify-content-start mt-3 align-items-center">
                    <div class="col-lg-3" style="margin-top: 3;">
                        <img src="{{ asset('storage/'. $item->foto) }}" class="d-block mx-lg-auto img-fluid"
                            alt="Resep" />
                    </div>
                    <div class="justify-content-between align-items-center px-lg-3 px-sm-1 px-md-3 mt-2">
                        <h6 class="fw-bold">Resep Anda {{ $item->status }}</h6>
                    </div>

                </div>
                <div class="align-items-center mt-2">
                    @if($item->catatan)
                    <p class="catat" style="font-size: 12px;">Catatan:</p>
                    <span class="text-secondary" style="font-size: 10px;">{{ $item->catatan }}</span>
                    @endif
                </div>

            </div>
            @empty
            <div class="col-12 py-5 ">
                <p
                    class="bg-danger text-white p-2 rounded text-center  text-sm-10 d-flex justify-content-center align-items-center">
                    Tidak Ada Resep</p>
            </div>
            @endempty

        </div>
    </div>
    @if($resep)
    <br><br><br><br><br><br><br><br><br><br><br><br>
    @endif
</div>
<div class="modal fade" id="modalku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Resep</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form or content here -->
                <form action="{{ route('resep.store') }}" class="col" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="foto" class="form-control">
                    <button type="submit" class="btn btn-primary mt-3">Upload</button>
                </form>

            </div>

        </div>
    </div>
</div>

@stop