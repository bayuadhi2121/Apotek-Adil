@extends('layout.layout')

@section('content')
<div class="container col-xl-10 px-4 py-5">
    <div class="row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6 text">
            <h1 class="display-5 fw-bold mb-3" style="color: black; font-weight: 700">Selamat Datang di<br> Apotek Adil
            </h1>
            <p class="lead">
                The best place with the best price to get your medicine with or without leaving your house. Get your
                medicine now !
            </p>
            <div class="button-container">

                <a class=" btn btn-labeled btn-primary cari" href="{{ route('produk.index') }}">Obat</a>
                <a class="btn btn-outline-primary resep" href="{{ route('resep.index') }}">
                    Upload Resep
                </a>
            </div>
        </div>
        {{-- test --}}

        <div class="col-lg-6 gambar">
            <img src="{{asset('image/undraw_medicine_b-1-ol(1) 1.png')}}" class="d-block mx-lg-auto img-fluid"
                alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
        </div>
    </div>

</div>

<!-- Hero End -->

<!-- feature start -->

<div class="container px-4 py-5">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start ">
            <div class="flex-shrink-0 me-3 section1">
                <img src="{{ asset('image/healthicons_child-care.png') }}" alt="" class="pb-3 gambarhome1"
                    style="color: #1B7D53; width: 60px ; height:60px; ">
                {{-- <span class=" iconify " data-inline=" false" data-icon="ic:baseline-location-on"
                    style="color: #1B7D53; font-size: 48px"></span> --}}
            </div>
            <div class="">
                <h2 style="color: #1B7D53; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">Service
                    with Care</h2>
                <p style="color: #1B7D53; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Melayani
                    dengan sepenuh hati</p>
            </div>
        </div>

        <div class="col d-flex align-items-start section2">
            <div class="flex-shrink-0 me-3">
                <img src="{{ asset('image/verified.png') }}" alt="" class="mt-2"
                    style="color: #1B7D53; width: 48px ;height:48px; ">
                {{-- <span class="iconify" data-inline="false" data-icon="ic:twotone-delivery-dining"
                    style="color: #1B7D53; font-size: 48px"></span> --}}
            </div>
            <div class="">
                <h2 style="color: #1B7D53; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">
                    High-Quality Products</h2>
                <p style="color: #1B7D53; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Tersedia
                    obat generik & branded berkualitas</p>
            </div>
        </div>

        <div class="col d-flex align-items-start section3 vo">
            <div class="flex-shrink-0 me-3">
                <img src="{{ asset('image/time.png') }}" class="mt-2"
                    style="color: #1B7D53; width: 48px ; height:48px; ">
                {{-- <span class="iconify" data-inline="false" data-icon="bx:bx-support"
                    style="color: #1B7D53; font-size: 48px"></span> --}}
            </div>
            <div class="">
                <h2 style="color: #1B7D53; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">
                    All Day, Every Day</h2>
                <p style="color: #1B7D53; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">
                    Pelayanan setiap hari hingga jam 12 malam</p>
            </div>
        </div>
    </div>
</div>
<!-- feature end -->

<!-- Best Deals Start -->

<section id="deals">
    <div class="container px-4 pb-5">
        <div class="titlehome border-bottom d-flex justify-content-between align-items-end">
            <h2 class="pb-2 " style="color: #1B7D53; font-size: 32px; font-weight: 700">Kategori</h2>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col T1">
                <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg"
                    style="background-size: 340px  ">
                    <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                        <h4 class="pt-5 mt-5 mb-4"
                            style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">
                        </h4>
                        <h1
                            style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                            UPLOAD <br />
                            RESEP
                        </h1>
                        <div class="justify-content-md-end">
                            <a class="btn btn-outline-light rounded-pill" href="{{ route('resep.index') }}"
                                style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#"
                                role="button">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col T2">
                <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg"
                    style="background-size: 340px">
                    <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                        <h4 class="pt-5 mt-5 mb-4"
                            style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">
                        </h4>
                        <h1
                            style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                            OBAT <br />
                            RESEP
                        </h1>
                        <div class="justify-content-md-end">
                            <a class="btn btn-outline-light rounded-pill"
                                href="{{ route('produk.index', ['category' => 'Obat Resep']) }}"
                                style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#"
                                role="button">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col T3">
                <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg"
                    style=" background-size: 340px">
                    <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                        <div class="justify-content-md-end">
                            <h4 class="pt-5 mt-5 mb-4"
                                style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">
                            </h4>
                            <h1
                                style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                                KATEGORI <br />
                                LAINNYA
                            </h1>
                            <a class="btn btn-outline-light rounded-pill" href="{{ route('produk.index') }}"
                                style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#"
                                role="button">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Best Deals End -->

<!-- Best Sales Start -->
<section id="bestsales" class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

    <div class=" container cont2 py-lg-5  col-xl-5 col-md-5  col-lg-5  me-0 ">
        <div class="container-responsive" style="background-color: #1B7D53; border-radius: 20px;">
            <div class="p-lg-5 d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-white konsul">Ingin Konsultasi Dengan Apoteker?</h1>
                <div class="col-5 justify-center div-wa pt-4">
                    <a href="https://wa.me/6287865861482" class="btn btn-labeled btn-primary btn-wa"
                        style="background-color: white;">Klik Via WhatsApp</a>
                </div>
                <div class="pb-3 pt-0 pt-md-3 pb-md-0">
                    <span class=" text-white  text-periode">Periode Konsultasi:
                        Senin - Jumat
                        17:00 - 21:00</span>
                </div>
            </div>

        </div>
    </div>
    <div class="container cont2 py-lg-5 col-xl-5 col-md-5 col-lg-5  ms-0  ">
        <div class="container-responsive" style="background-color: #1B7D53; border-radius: 20px;">
            <div class="p-lg-5 d-flex justify-content-center align-items-center flex-column">
                <h1 class="text-white konsul">Ingin Pesan Langsung di Apotek?</h1>
                <div class="col-5 justify-center div-wa pt-4">
                    <a href="https://wa.me/6287798188955" class="btn btn-labeled btn-primary btn-wa"
                        style="background-color: white;">Klik Via WhatsApp</a>
                </div>
                <div class="pb-3 pt-0 pt-md-3 pb-md-0">
                    <span class=" text-white text-periode">Periode Konsultasi:

                        Senin - Minggu
                        08:00 - 00:00</span>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="section">
    <div class="container py-lg-5"></div>
</div>
@stop