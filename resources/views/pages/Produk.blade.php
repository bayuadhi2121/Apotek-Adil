@extends('layout.layout')

@section('content')

<!-- sidebar start -->
<section class="py-5">
    <div class="container">
        <class class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="flex-shrink-0 p-3" style="width: 280px">

                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">
                                Category</h3>
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">All
                                        products</a></li>
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Pharmacy</a>
                                </li>
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Personal
                                        Care</a></li>
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Family
                                        Care</a></li>
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Accesories</a>
                                </li>
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Fitness</a>
                                </li>
                                <li><a href="#" class="link-dark rounded"
                                        style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Health
                                        Devices</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class=" col-12 text-md-end pb-4">
                    <h3 class="text-md-start border-bottom py-2"
                        style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: 500">
                        All Products</h3>
                    <div class="dropdown">

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">New Arrival</a></li>
                            <li><a class="dropdown-item" href="#">Highest Price - Lower Price</a></li>
                            <li><a class="dropdown-item" href="#">Lower Price - Highest Price</a></li>
                        </ul>
                    </div>
                </div>
                <!-- PRoducts -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4" style="width: auto">
                            <div class="badge badge-blue card-badge card-badge-left text-uppercase">New</div>
                            <div class="badge badge-green card-badge card-badge-left text-uppercase"
                                style="margin-top: 30px;">30% Off</div>
                            <!-- image -->
                            <img src="" class="card-img-top" alt="" />
                            <div class="card-body" style="margin-left: -1rem;">
                                <h5 class="card-title">test</h5>
                                <a href="#">
                                    <p class="store mb-2"
                                        style="font-family:'Poppins',sans-serif; font-size: 14px; font-weight: 500;">
                                        test</p>
                                </a>
                                <p class="card-text mb-2"
                                    style="color: #3682f4; font-size: 18px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                                    <s class="text-muted"
                                        style="font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: 600"></s>
                                    Rp 1000000
                                </p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star unchecked"></span><br />
                                <form action="" class="" method="POST">
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name="price" value="">
                                    <input type="hidden" name="nama" value="">
                                    <input type="hidden" name="toko" value="">
                                    <input type="hidden" name="gambar" value="">
                                    <input type="hidden" name="qty" value="1">
                                    <input type="hidden" name="redirect" value="http://127.0.0.1/my_pharmfi/after_shop">
                                    <button class="shop btn btn-primary mt-3" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add to cart" type="submit"><i class="bi bi-cart3"
                                            style="font-size: 17px;"></i></button>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Add to wishlist" class="wishlist btn btn-outline-primary mt-3"><span
                                            class="iconify" data-inline="false" data-icon="carbon:favorite"
                                            style="font-size: 20px; margin: 1px;"></span></button>
                                    <a type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="View details" href="" class="view btn btn-outline-primary mt-3"><span
                                            class="iconify" data-icon="bi:eye" data-inline="false"
                                            style="font-size: 20px; margin: 1px; align-self: center;"></span></a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav class="pt-5" aria-label="pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </div>
    </div>
</section>

@stop