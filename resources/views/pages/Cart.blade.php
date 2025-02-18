@extends('layout.layout')

@section('content')

<section id="cartpage">
    <div class="container py-5">
        <div class="row">
            <div class="col py-4">
                <h1 style="font-family: 'Poppins', sans-serif;">Keranjang</h1>
            </div>
        </div>
        <div class="row g-3 g-lg-1">
            <!-- barang -->
            <div class="col">
                @foreach ($cart as $item)
                <div class="bg-white cart-item-list p-2 mb-3">

                    <div class="cart-item pb-2 d-flex justify-content-between">
                        <img class="col-4" style="" src="{{ asset('storage/'.$item->produk->foto ) }}" alt="image" />

                        <div class="col-md-3 mt-3 ms-4">
                            <h5 class="cart-item-tittle  fs-3">{{ $item->produk->nama }}</h5>
                            <small class="cart-item-subtittle" style="color:#E46A25 ">{{
                                $item->produk->kategori->nama
                                }}</small>
                            <p class="pt-2" style="color: #3682f4">Rp {{ $item->produk->harga }}</p>

                            <div class="d-flex gap-2">
                                <a href="{{ route('cart.edit', ['cart' => $item->produk->id,'jenis'=>'tambah']) }}"
                                    class="btn btn-primary col-3">+</a>
                                <input class="form-control form-control-xs text-center" style="width: 112px;"
                                    value="{{ $item->qty }}" min="1" readonly />
                                <a href="{{ route('cart.edit', ['cart' => $item->produk->id,'jenis'=>'kurang']) }}"
                                    class="btn btn-primary col-3">-</a>
                            </div>



                        </div>
                        <div class="col-2 text-end mt-3">
                            <div class="cart-item-options">
                                <form action="{{ route('cart.destroy',['cart'=>$item->id]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn-close" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Remove item" onclick=""></button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                @endforeach
                <div class="col">
                    @if($cart)
                    <br><br><br><br><br><br><br><br><br><br>
                    @endif
                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
            <aside class="col-lg-4">
                <div class="bg-white">
                    <h2 class="py-3 ps-3 mb-3 text-uppercase"
                        style="font-family: 'Poppins', sans-serif; font-weight: 500 ">
                        Order total</h2>
                    <ul class="list-group list-group-minimal mb-3">

                        <li class="list-group-item d-flex justify-content-between align-items-center border-bottom"
                            style="border: 0; font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 500">
                            Total
                            <span>{{ $total }}</span>
                        </li>
                        <ul>
                            @if($cart->isEmpty())
                            <button type="submit" class="btn btn-primary btn-block rounded-0 text-uppercase"
                                style="margin: 24px; padding: 16px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 500">
                                Proceed to checkout
                            </button>

                            @else
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-block rounded-0 text-uppercase"
                                    style="margin: 24px; padding: 16px; display: block; font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 500">
                                    Proceed to checkout
                                </button>
                            </form>
                            @endif
                            </li>
                        </ul>
                    </ul>
            </aside>
        </div>

    </div>
    </div>
</section>
@stop