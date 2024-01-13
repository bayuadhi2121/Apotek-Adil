@extends('layout.layout')

@section('content')

<body>
    {{-- <div class="py-3 bg-dark-2">
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
    </div> --}}
    <div class="container">
        <div class="py-2 mb-1">
            <div class="px-lg-1">
                <div class="row align-items-center">
                    <!-- Gallery -->
                    <div class="col-lg-4 col-md-1 col-sm-9 pt-lg-4">
                        <div class="product-gallery">
                            <div class="product-gallery-preview ">
                                <div class="product-gallery-preview-item card-border" id="first">
                                    <img src="{{ asset('storage/' . $detail->foto) }}"
                                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pe-lg-4 pe-md-3 pt-lg-4">
                        <div class="product-details ms-auto pb-3 mt-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 style="font-size: 24px;">{{ $detail->nama}}<a class="store" href="#"
                                        style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing: 0.5px"></a>
                                </h5>

                            </div>
                            <div class="mb-3">
                                @if($detail->promo)
                                <s class="text-muted text-decoration-line-through"
                                    style="font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: 600">
                                    @currency($detail->harga)</s>
                                <p class="card-text mb-2"
                                    style="color: #3682f4; font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 700">
                                    @currency($detail->harga_promo)
                                </p>
                                @else
                                <p class="card-text mb-2"
                                    style="color: #3682f4; font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 700">
                                    @currency($detail->harga)
                                </p>
                                @endif

                            </div>
                            {{-- @foreach ($detail as $item)
                            {!! nl2br(e($item->indikasi)) !!}
                            @endforeach --}}
                            <div class="mb-4">
                                <p
                                    style="font-family:'Poppins',sans-serif; font-size: 13px; font-weight: 400; text-align:justify; text-justify:auto;">
                                    {{ $detail->deskripsi }}</p>
                            </div>

                            <form action="{{ route('detail.store', ['produk'=>$detail]) }}" method="POST">
                                @csrf
                                <div class="mb-3 d-flex align-items-center mt-4">
                                    @if (!Auth::check())
                                    @else
                                    @endif
                                    @if(Auth::check())
                                    @if(!Auth::user()->is_admin)
                                    <input type="number" class=" form-control form-control-xs"
                                        style="width: 5rem; margin-right: 1rem;" placeholder="Qty" min="1" name="qty"
                                        required />
                                    <button type="submit" onclick="see()" id="toast"
                                        class="btn btn-primary btn-shadow d-block px-4 btn-custom"
                                        style="margin-right: 1rem;"><i class="bi bi-cart2 me-2"
                                            style="font-size: 18px;"></i></span>Add to cart</button>
                                    @else
                                    <input type="number" class=" form-control form-control-xs"
                                        style="width: 5rem; margin-right: 1rem;" placeholder="Qty" min="1" name="qty"
                                        required />
                                    <button type="submit" onclick="see()" id="toast"
                                        class="btn btn-primary btn-shadow d-block px-4 btn-custom"
                                        style="margin-right: 1rem;"><i class="bi bi-cart2 me-2"
                                            style="font-size: 18px;"></i></span>Add to cart</button>
                                    @endif
                                    @else
                                    <input type="number" class=" form-control form-control-xs"
                                        style="width: 5rem; margin-right: 1rem;" placeholder="Qty" min="1" name="qty"
                                        required />
                                    <button type="submit" onclick="see()" id="toast"
                                        class="btn btn-primary btn-shadow d-block px-4 btn-custom"
                                        style="margin-right: 1rem;"><i class="bi bi-cart2 me-2"
                                            style="font-size: 18px;"></i></span>Add to cart</button>
                                    @endif
                                </div>
                            </form>
                            <div class="mb-3">
                                <div class="mb-3 align-items-center mt-4">
                                    <p>Kategori : <a
                                            href="{{ route('produk.index', ['category' => $detail->kategori->nama]) }}"
                                            style="color:#E46A25; font-weight:600; font-family:'Poppins'; background:none;border: none;cursor: pointer;">{{$detail->kategori->nama}}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-group mt-3" style="width: 100%" role="group" aria-label="Basic outlined example">
                <button type="" style="width: 100%">INFORMASI TAMBAHAN</button>
            </div>
            <!-- Description and others -->
            <div class=" my-lg-3 py-1">
                <div class="conten " id="reviews">
                    <div class="row pb-2 pt-3 grid gap-3">
                        <div>
                            <h4 class="border-bottom py-1" style="font-family: 'Poppins'">Indikasi</h4>
                            <p class=" d-inline-block align-middle"
                                style="font-family: 'Poppins',sans-serif;text-align:justify; text-justify:auto;">
                                {{$detail->indikasi}}</p>
                        </div>
                        <div>
                            <h4 class="border-bottom py-1" style="font-family: 'Poppins'">Komposisi</h4>
                            <p class=" d-inline-block align-middle"
                                style="font-family: 'Poppins',sans-serif;text-align:justify; text-justify:auto;">
                                {{$detail->kandungan}}</p>
                        </div>
                        <div>
                            <h4 class="border-bottom py-1" style="font-family: 'Poppins'">Aturan Pakai</h4>
                            <p class=" d-inline-block align-middle"
                                style="font-family: 'Poppins',sans-serif;text-align:justify; text-justify:auto;">
                                {{$detail->aturanpakai}}</p>
                        </div>
                        <div>
                            <h4 class="border-bottom py-1" style="font-family: 'Poppins'">Perhatian</h4>
                            <p class=" d-inline-block align-middle"
                                style="font-family: 'Poppins',sans-serif;text-align:justify; text-justify:auto;">
                                {{$detail->perhatian}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Desc end -->
    <!-- another product start-->
    <!-- blmjdi -->
    <!-- end -->
    @stop