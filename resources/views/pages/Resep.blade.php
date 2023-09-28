@extends('layout.layout')

@section('content')
<div class="py-3 bg-dark-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-white">
                    <span class="heading-xxs letter-spacing-xl"
                        style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing: 0.5px">Enjoy
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
                    <div class="">
                        <span class="">Card title</span>
                    </div>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">pengambilan</span>
                    </div>
                </div>

                <div class=" trx justify-content-between align-items-center px-lg-5 px-sm-5 px-md-5">
                    <h5 class="title">Card title</h5>
                    <span class="tgltrx">9 juli 2023, 02.50</span>

                </div>
            </div>
            <div class="cardtrx py-3 col-md-5 col-12">
                <div class="row ps-3 py-1">
                    <div class="col-5">
                        <h5 class="title">Card title</h5>
                    </div>
                </div>
                <div class=" trx justify-content-between align-items-center px-lg-5 px-sm-5 px-md-5">
                    <h5 class="title">Card title</h5>
                    <span class="tgltrx">9 juli 2023, 02.50</span>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">pengambilan</span>
                    </div>
                </div>
            </div>
            <div class="cardtrx py-3 col-md-5 col-12">
                <div class="row ps-3 py-1">
                    <div class="col-5">
                        <h5 class="title">Card title</h5>
                    </div>
                </div>
                <div class=" trx justify-content-between align-items-center px-lg-5 px-sm-5 px-md-5">
                    <h5 class="title">Card title</h5>
                    <span class="tgltrx">9 juli 2023, 02.50</span>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">pengambilan</span>
                    </div>
                </div>
            </div>
            <div class="cardtrx py-3 col-md-5 col-12">
                <div class="row ps-3 py-1">
                    <div class="col-5">
                        <h5 class="title">Card title</h5>
                    </div>
                </div>
                <div class=" trx justify-content-between align-items-center px-lg-5 px-sm-5 px-md-5">
                    <h5 class="title">Card title</h5>
                    <span class="tgltrx">9 juli 2023, 02.50</span>
                    <div class="statustrx align-items-center px-lg-3 py-lg-1 px-sm-3 py-sm-1">
                        <span class="status">pengambilan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop