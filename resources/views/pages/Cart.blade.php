@extends('layout.layout')

@section('content')

<section id="cartpage">
    <div class="container py-5">
        <div class="row">
            <div class="col py-4">
                <h1 style="font-family: 'Poppins', sans-serif;">Your Cart</h1>
            </div>
        </div>
        <div class="row g-3 g-lg-1">
            <!-- barang -->
            <div class="col">
                @foreach ($cart as $item)
                <div class="bg-white cart-item-list p-2 mb-1 d-flex">

                    <div class="cart-item pb-2">
                        {{-- <div class="row justify-content-between"> --}}
                            <img class="col-4" style="" src="{{ asset('storage/'.$item->produk->foto ) }}"
                                alt="image" />

                            {{-- <div class=""> --}}
                                <div class="col-md-3 mt-3 ms-4">
                                    <h5 class="cart-item-tittle pt-3">{{ $item->produk->nama }}</h5>
                                    <small class="cart-item-subtittle" style="color:#E46A25 ">{{
                                        $item->produk->kategori->nama
                                        }}</small>
                                    <p style="color: #3682f4">Rp 1000</p>
                                    <input type="number" class="form-control form-control-xs mt-3" style="width: 112px;"
                                        value="{{ $item->qty }}" min="1" readonly />

                                </div>
                                <div class="col-2 text-end mt-3">
                                    <div class="cart-item-options">
                                        <form action="" method="POST">
                                            <input type="hidden" name="qty1" value="">

                                            <button type="submit" class="btn-close" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Remove item" onclick=""></button>
                                        </form>
                                    </div>
                                </div>
                                {{--
                            </div> --}}


                            {{--
                        </div> --}}
                    </div>

                </div>
                @endforeach
            </div>
            <aside class="col-lg-4">
                <div class="bg-white">
                    <h2 class="py-3 ps-3 mb-3 text-uppercase"
                        style="font-family: 'Poppins', sans-serif; font-weight: 500 ">Order total</h2>
                    <ul class="list-group list-group-minimal mb-3">

                        <li class="list-group-item d-flex justify-content-between align-items-center" style="border: 0">
                            test
                            <span>1000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-bottom"
                            style="border: 0; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500">
                            Total
                            <span>1000</span>
                        </li>
                        <li>
                            <a class="btn btn-primary btn-block rounded-0 text-uppercase"
                                style="margin: 24px; padding: 16px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 500">
                                Proceed to checkout
                            </a>
                        </li>
                    </ul>
            </aside>
        </div>

    </div>
    </div>
</section>
@stop