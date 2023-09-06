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
                <div class="bg-white cart-item-list p-2 mb-1">

                    <div class="cart-item pb-2">
                        <a href="#" class="cart-item-image mt-3"><img src="" alt="image" /></a>
                        <div class="cart-item-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <h5 class="cart-item-tittle pt-3">dwdwdw</h5>
                                            <small class="cart-item-subtittle">dwdw</small>
                                            <ul class="cart-item-meta">
                                                <li style="color: #3682f4">Rp 1000</li><br />
                                                <input type="number" class="form-control form-control-xs mt-3"
                                                    style="width: 112px;" value="" min="1" readonly />
                                            </ul>
                                        </div>
                                    </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white cart-item-list p-2 mb-1">

                    <div class="cart-item pb-2">
                        <a href="#" class="cart-item-image mt-3"><img src="" alt="image" /></a>
                        <div class="cart-item-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <h5 class="cart-item-tittle pt-3">dwdwdw</h5>
                                            <small class="cart-item-subtittle">dwdw</small>
                                            <ul class="cart-item-meta">
                                                <li style="color: #3682f4">Rp 1000</li><br />
                                                <input type="number" class="form-control form-control-xs mt-3"
                                                    style="width: 112px;" value="" min="1" readonly />
                                            </ul>
                                        </div>
                                    </div>
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
                            </div>
                        </div>
                    </div>
                </div>
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
        <div class="col-12 col-md-7">
            <!-- kupon -->
            <form class="mb-7 mb-md-0">
                <label class="fw-regular mb-3" style="font-size: 18px; font-family: 'Poppins', sans-serif;
            font-weight: 500;" for="carCouponCode">
                    Promo code :
                </label>
                <div class="row form-row">
                    <div class="col">
                        <input class="form-control form-control-sm rounded-0" id="cartCouponCode" type="text"
                            placeholder="Enter promo code">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-sm btn-primary" type="submit">Apply</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
@stop