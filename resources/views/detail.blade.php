@extends('layout.layout')

@section('content')

<body>
    <div class="py-3 bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center text-white">
                        <span class="heading-xxs letter-spacing-xl" style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing: 0.5px">Enjoy Our Final Year Discount Up to 30% 👀🤑🎉</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="py-3 mb-1">
            <div class="px-lg-1">
                <div class="row">
                    <!-- Gallery -->
                    <div class="col-lg-6 pe-lg-4 pe-md-3 pt-lg-4">
                        <div class="product-gallery">
                            <div class="product-gallery-preview order-sm-2">
                                <div class="product-gallery-preview-item card-border" id="first">
                                    <img src="{{asset('image/detail1.png')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-4 pe-md-3 pt-lg-4">
                        <div class="product-details ms-auto pb-3 mt-5">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 style="font-size: 24px;"> Ifidex 05<a class="store" href="#" style="font-size: 18px; font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing: 0.5px"></a></h5>

                            </div>
                            <div class="mb-3">
                                <p class="card-text mb-2" style="color: #3682f4; font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 700">Rp 500.000
                                </p>
                            </div>
                            <div class="mb-4">
                                <span style="font-family:'Poppins',sans-serif; font-size: 14px; font-weight: 600;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, voluptas voluptatem! Doloribus hic aliquid, repudiandae consequatur consequuntur accusamus tempore sequi? Nulla saepe, rerum sunt placeat velit officiis alias tempora optio?</span>
                            </div>


                            <form class="mb-grid-gutter" action="" method="POST">
                                <div class="mb-3 d-flex align-items-center mt-4">
                                    <input type="hidden" name="id" value="<">
                                    <input type="hidden" name="price" value="">
                                    <input type="hidden" name="nama" value="">
                                    <input type="hidden" name="toko" value=" ">
                                    <input type="hidden" name="gambar" value="">
                                    <input type="hidden" name="redirect" value="">
                                    <input type="number" class=" form-control form-control-xs" style="width: 5rem; margin-right: 1rem;" placeholder="Qty" min="1" name="qty" required />
                                    <button type="submit" onclick="see()" id="toast" class="btn btn-primary btn-shadow d-block px-4 btn-custom" style="margin-right: 1rem;"><i class="bi bi-cart2 me-2" style="font-size: 18px;"></i></span>Add to cart</button>
                                </div>
                            </form>
                            <div class="mb-3">
                                <div class="mb-3 align-items-center mt-4">
                                    <h6>category : obat bebas</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-group" style="width: 100%" role="group" aria-label="Basic outlined example">
            <button type="button" style="width: 50%">DESKRIPSI</button>
            <button type="button" style="width: 50%">INFORMASI TAMBAHAN</button>
        </div>
        <!-- Description and others -->
        <div class=" my-lg-3 py-1">
            <div class="conten " id="reviews">
                <div class="row pb-3">
                    <span class="d-inline-block align-middle" style="font-family: 'Poppins',sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda sunt, eius corporis, nemo nesciunt magni sed repellat maiores facilis quibusdam esse dolore voluptatum ipsum quam nostrum animi, fugit sequi delectus? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus at provident nihil quae. Aliquam quas laboriosam, consequatur voluptatem voluptatibus obcaecati quod dignissimos blanditiis voluptas maiores iure quo quos eum! Quae.</span>
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