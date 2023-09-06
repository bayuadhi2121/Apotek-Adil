@extends('layout.layout')

@section('content')

<body>
    <!-- tittle -->
    <div class="page-tittle-overlap bg-dark pt-2">
        <div class="container d-lg-flex justify-content-start py-1 py-lg-2">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a style=" font-family: 'Poppins',sans-serif; color: #52b788;" href="#">
                                <i> </i>Home</a></li>
                        <li class="breadcrumb-item"><a style="font-family: 'Poppins',sans-serif; color: #52b788;" href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a style="font-family: 'Poppins',sans-serif;">Product Details</a></li>
                    </ol>
                </nav>
                </nav>
            </div>
        </div>
    </div>
    <!-- tittle end -->
    <div class="container">
        <div class="py-3 mb-5">
            <div class="px-lg-1">
                <div class="row">
                    <h4 class="mt-3">Product Details</h4>
                    <!-- Gallery -->
                    <div class="col-lg-6 pe-lg-4 pe-md-3 pt-lg-4">
                        <div class="product-gallery">
                            <div class="product-gallery-preview order-sm-2">
                                <div class="product-gallery-preview-item card-border" id="first">
                                    <img src="" alt="product image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <div class="product-details ms-auto pb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 style="font-size: 24px;"> by <a class="store" href="#" style="font-size: 24px;"></a></h5>
                                <a href="#review">
                            </div>
                            <div class="star-rating" style="align-items: center; justify-content: center;">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                                <span class="d-inline-block fs-sm text-body ms-1 mt-1" style="font-family: 'Poppins', sans-serif;
                   font-weight: 500;"> Reviews</span>
                            </div>
                            </a>
                        </div>
                        <div class="mb-3">
                            <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 700">Rp <s class="text-muted" style="font-size: 16px; font-family: 'Poppins', sans-serif; font-weight: 600">3.456.212</s>
                                <span class="badge badge-blue text-uppercase badge-shadow align-middle ms-2">New</span>
                                <span class="badge badge-green badge-shadow text-uppercase align-middle">30% Off</span>
                            </p>
                        </div>
                        <div class="mb-4">
                            <span class="iconify" data-icon="majesticons:check-line" data-inline="false" style="font-size: 18px; color: #0cbd70;"></span>
                            <span style="font-family:'Poppins',sans-serif; font-size: 14px; color: #0cbd70; font-weight: 600;">stock</span>
                        </div>
                        <div class="mb-4">
                            <span class="iconify" data-icon="emojione-v1:cross-mark" data-inline="false" style="font-size: 11px; color: red;"></span>
                            <span style=" font-family:'Poppins',sans-serif; font-size: 14px; color: red; font-weight: 600;">out of stock</span>
                        </div>

                        <div class="mb-3">
                            <div class="mb-3 align-items-center">
                                <h6>Product Description :</h6>
                                <p> </p>
                            </div>
                            <div class="d-flex justify-content-between pb-1">
                                <label class="form-label" for="product-capsules">Capsules:</label>
                            </div>
                            <select class="form-select py-2" style="font-family: 'Poppins',sans-serif;" id="product-size">
                                <option value>Capsules</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
                        </div>
                        <form class="mb-grid-gutter" action="" method="POST">
                            <div class="mb-3 d-flex align-items-center">
                                <input type="hidden" name="id" value="<">
                                <input type="hidden" name="price" value="">
                                <input type="hidden" name="nama" value="">
                                <input type="hidden" name="toko" value=" ">
                                <input type="hidden" name="gambar" value="">
                                <input type="hidden" name="redirect" value="">
                                <input type="number" class=" form-control form-control-xs" style="width: 5rem; margin-right: 1rem;" placeholder="Qty" min="1" name="qty" required />
                                <button type="submit" onclick="see()" id="toast" class="btn btn-primary btn-shadow d-block px-4" style="margin-right: 1rem;"><i class="bi bi-cart2 me-2" style="font-size: 18px;"></i></span>Add to cart</button>
                                <button type="submit" class="btn btn-outline-primary btn-shadow d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="bi bi-heart"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Description and others -->
    <div class="border-top my-lg-3 py-5">
        <div class="container pt-md-2" id="reviews">
            <div class="row pb-3">
                <div class="col-lg-5 col-md-5">
                    <h2 class="h3 mb-4"> Reviews</h2>
                    <div class="star-rating me-2">
                        <i class="bi-star-fill"></i>
                        <i class="bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>

                    </div>
                    <span class="d-inline-block align-middle" style="font-family: 'Poppins',sans-serif;">Average Rating</span>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3">
                            <span class="d-inline-block align-middle text-muted">5</span>
                            <i class="bi bi-star-fill fs-xs ms-1"></i>
                        </div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <span class="text-muted ms-3">7</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3">
                            <span class="d-inline-block align-middle text-muted">4</span>
                            <i class="bi bi-star-fill fs-xs ms-1"></i>
                        </div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-teal" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <span class="text-muted ms-3">7</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3">
                            <span class="d-inline-block align-middle text-muted">3</span>
                            <i class="bi bi-star-fill fs-xs ms-1"></i>
                        </div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <span class="text-muted ms-3">5</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3">
                            <span class="d-inline-block align-middle text-muted">2</span>
                            <i class="bi bi-star-fill fs-xs ms-1"></i>
                        </div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <span class="text-muted ms-3">3</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3">
                            <span class="d-inline-block align-middle text-muted">1</span>
                            <i class="bi bi-star-fill fs-xs ms-1"></i>
                        </div>
                        <div class="w-100">
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <span class="text-muted ms-3">1</span>
                    </div>
                </div>
            </div>
            <div class="row pt-4">

                <div class="product-review pb-4 mb-4 border-bottom">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center me-4 pe-2">
                            <img class="rounded-circle" width="50" src="" alt="">
                            <div class="ps-3">
                                <h6 class="fs-sm mb-0"></h6>
                                <span class="fs-ms text-muted"> 1 week ago</span>
                            </div>
                        </div>
                        <div class="star-rating">

                            <i class="star-rating-icon bi-star-fill"></i>

                            <i class="star-rating-icon bi-star"></i>
                            <div class="fs-ms text-muted">Test</div>
                        </div>

                    </div>
                    <p class="fs-md"></p>
                    <div class="text-nowrap">
                        <button class="btn-like" type="button"><i class="bi-hand-thumbs-up"></i>15</button>
                        <button class="btn-like" type="button"><i class="bi-hand-thumbs-down"></i>2</button>
                    </div>
                </div>
            </div>
            <!-- Collapsed End -->
            <div class="col-lg-5 px-3 col-md-5 mt-2  mt-md-0 pt-md-0">
                <div class="bg-light p-3 rounded-3">
                    <h3 class="h4 mb-4 pt-2">Write a review</h3>
                    <form class="needs-validation" method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label" for="review-rating" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500;">
                                Rating
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" required id="review-rating " name="rating">
                                <option>Choose Rating</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>

                            <div class="invalid-feedback">Please choose your rating</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="review-text" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 500;">
                                Your Review
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" id="review-text" required rows="6" name="review"></textarea>

                            <div class="invalid-feedback">Please write a review</div>
                        </div>
                        <button class="mt-3 mb-2 p-2 btn btn-primary btn-shadow d-block w-100" type="submit" name="submitR">Submit a Review</button>
                        <!-- toast -->
                        <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
                            <div id="Toast" class="toast bg-success hide align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body text-white">
                                        Added to cart
                                    </div>
                                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    </form>
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