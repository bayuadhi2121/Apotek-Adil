@extends('layout.layout')

@section('content')
<div class="container col-xl-10 px-4 py-5">
    <div class="row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6 text">
            <h1 class="display-5 fw-bold mb-3" style="color: black; font-weight: 700">Selamat Datang <br> Apotek Adil</h1>
            <p class="lead">
                The best place with the best price to get your medicine with or without leaving your house. Get your medicine now !
            </p>
            <div class="button-container">

                <a class=" btn btn-labeled btn-primary cari" href="">Resep</a>
                <a class="btn btn-outline-primary resep" href="">
                    Upload Resep
                </a>
            </div>
        </div>

        <div class="col-lg-6 gambar">
            <img src="{{asset('image/undraw_medicine_b-1-ol(1) 1.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
        </div>
    </div>

</div>

<!-- Hero End -->

<!-- feature start -->

<div class="container px-4 py-5">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start ">
            <div class="flex-shrink-0 me-3 section1">
                <span class="iconify " data-inline="false" data-icon="ic:baseline-location-on" style="color: #1B7D53; font-size: 48px"></span>
            </div>
            <div class="">
                <h2 style="color: #1B7D53; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">Apotik di Dekat Anda </h2>
                <p style="color: #1B7D53; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Apotik Terdekat dari Rumah Anda.</p>
            </div>
        </div>

        <div class="col d-flex align-items-start section2">
            <div class="flex-shrink-0 me-3">
                <span class="iconify" data-inline="false" data-icon="ic:twotone-delivery-dining" style="color: #1B7D53; font-size: 48px"></span>
            </div>
            <div class="">
                <h2 style="color: #1B7D53; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">Kualitas Terjamin</h2>
                <p style="color: #1B7D53; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Obat yang Sudah Terjamin Kualitasnya.</p>
            </div>
        </div>

        <div class="col d-flex align-items-start section3">
            <div class="flex-shrink-0 me-3">
                <span class="iconify" data-inline="false" data-icon="bx:bx-support" style="color: #1B7D53; font-size: 48px"></span>
            </div>
            <div class="">
                <h2 style="color: #1B7D53; font-size: 24px; font-family: 'Mulish', sans-serif; font-weight: 700">24/7 Customer Care</h2>
                <p style="color: #1B7D53; font-size: 16px; font-family: 'Mulish', sans-serif; font-weight: 400">Jika Mengalami Kendala Kami Siap Membantu Anda Setiap Saat.</p>
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
            <a href="">
                <h2 class="pb-2" style="color: #1B7D53; font-size: 17px; font-weight: 500">Lihat Semua Kategori >></h2>
            </a>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col T1">
                <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg" style="background-size: 340px  ">
                    <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                        <h4 class="pt-5 mt-5 mb-4" style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">UP TO 30%</h4>
                        <h1 style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                            ELECTRONIC <br />
                            THERMOMETER
                        </h1>
                        <div class="justify-content-md-end">
                            <a class="btn btn-outline-light rounded-pill" style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#" role="button">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col T2">
                <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg" style="background-size: 340px">
                    <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                        <h4 class="pt-5 mt-5 mb-4" style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">DUREX CONDOM</h4>
                        <h1 style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                            ENCHANTED <br />
                            FEELING
                        </h1>
                        <div class="justify-content-md-end">
                            <a class="btn btn-outline-light rounded-pill" style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#" role="button">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col T3">
                <div class="card-deals card-cover h-100 overflow-hidden text-white text-end rounded-3 shadow-lg" style=" background-size: 340px">
                    <div class="d-flex flex-column h-100 pb-3 text-white text-shadow-1">
                        <div class="justify-content-md-end">
                            <h4 class="pt-5 mt-5 mb-4" style="margin-right: 24px; margin-bottom: 4; font-size: 20px; font-family: 'Montserrat', sans-serif; font-weight: 400">HEALTH DEVICES</h4>
                            <h1 style="margin-right: 24px; margin-bottom: 12px; font-size: 32px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                                ARM BLOOD <br />
                                PRESSURE
                            </h1>
                            <a class="btn btn-outline-light rounded-pill" style="margin-right: 24px; margin-top: 12px; margin-bottom: 12px" href="#" role="button">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Best Deals End -->

<!-- Best Sales Start -->
<section id="bestsales">
    <div class="container py-5">
        <div class="col-lg-6 col-sm-3">
            <h2 class="pb-3 best" style="color: #051e76; font-size: 32px; font-family: 'Mulish', sans-serif; font-weight: 700"></h2>
            <div class="row sales d-flex justify-content-center align-items-center">
                <h1 class="">Ingin Konsultasi Dengan Apoteker ?</h1>
                <h1 class="">Ingin Konsultasi Dengan Apoteker ?</h1>
            </div>
        </div>
</section>
@stop