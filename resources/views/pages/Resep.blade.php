@extends('layout.layout')

@section('content')
<div class="py-3 bg-dark-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-white">
                    <span class="heading-xxs letter-spacing-xl" style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing: 0.5px">Enjoy
                        Our Final Year Discount Up to 30% 👀🤑🎉</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container col-xl-9 px-4 py-5">
    <div class="row py-3">
        <div class="button-transaksi grid gap-">
            <button type="button" class="btn btn-outline-secondary">Semua</button>
            <button type="button" class="btn btn-outline-secondary">Selesai</button>
            <button type="button" class="btn btn-outline-secondary">Dibatalkan</button>
            <button type="button" class="btn btn-outline-secondary">Pengambilan</button>

        </div>
    </div>
    <div class="py-3 d-grid ">
        {{-- <div class="col-12 py-5 ">
            <p>Tidak Ada Resep</p>
        </div> --}}
        <div class="row row-cols-2 gap-4">
            <div class="cardtrx py-3 col-md-5 col-12 ">
                <div class="d-flex justify-content-between ">
                    <div class="align-items-ce">
                        <span class="">Card title</span>
                    </div>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">diterima</span>
                    </div>
                </div>
                <div class="" style="font-size: 10px;">
                    <span class="text-secondary">9 juli 2023, 02.50</span>
                </div>
                <div class="d-flex justify-content-start mt-3 ">
                    <div class="col-lg-3" style="margin-top: 3;">
                        <img src="{{asset('image/detail.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" />
                    </div>
                    <div class="justify-content-between align-items-center px-lg-3 px-sm-1 px-md-3 mt-5">
                        <h6 class="fw-bold">Resep Anda diTerima</h6>
                    </div>

                </div>
                <div class="align-items-center mt-2">
                    <p class="catat" style="font-size: 12px;">Catatan:</p>
                    <span class="text-secondary" style="font-size: 10px;">9 juli 2023, 02.50</span>
                </div>
            </div>
            <div class="cardtrx py-3 col-md-5 col-12 ">
                <div class="d-flex justify-content-between ">
                    <div class="align-items-ce">
                        <span class="">Card title</span>
                    </div>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">diterima</span>
                    </div>
                </div>
                <div class="" style="font-size: 10px;">
                    <span class="text-secondary">9 juli 2023, 02.50</span>
                </div>
                <div class="d-flex justify-content-start mt-3 ">
                    <div class="col-lg-3" style="margin-top: 3;">
                        <img src="{{asset('image/detail.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" />
                    </div>
                    <div class="justify-content-between align-items-center px-lg-3 px-sm-1 px-md-3 mt-5">
                        <h6 class="fw-bold">Resep Anda diTerima</h6>
                    </div>

                </div>
                <div class="align-items-center mt-2">
                    <p class="catat" style="font-size: 12px;">Catatan:</p>
                    <span class="text-secondary" style="font-size: 10px;">9 juli 2023, 02.50</span>
                </div>
            </div>
            <div class="cardtrx py-3 col-md-5 col-12 ">
                <div class="d-flex justify-content-between ">
                    <div class="align-items-ce">
                        <span class="">Card title</span>
                    </div>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">diterima</span>
                    </div>
                </div>
                <div class="" style="font-size: 10px;">
                    <span class="text-secondary">9 juli 2023, 02.50</span>
                </div>
                <div class="d-flex justify-content-start mt-3 ">
                    <div class="col-lg-3" style="margin-top: 3;">
                        <img src="{{asset('image/detail.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" />
                    </div>
                    <div class="justify-content-between align-items-center px-lg-3 px-sm-1 px-md-3 mt-5">
                        <h6 class="fw-bold">Resep Anda diTerima</h6>
                    </div>

                </div>
                <div class="align-items-center mt-2">
                    <p class="catat" style="font-size: 12px;">Catatan:</p>
                    <span class="text-secondary" style="font-size: 10px;">9 juli 2023, 02.50</span>
                </div>
            </div>



        </div>
    </div>
</div>

@stop