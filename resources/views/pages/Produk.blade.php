@extends('layout.layout')

@section('content')

<!-- sidebar start -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="flex-shrink-0 p-3" style="width: 280px">

                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <h3 class="align-items-center rounded pb-2" style="font-family: 'Mulish', sans-serif">
                                Category</h3>
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <form action="">
                                    <li><a href="{{ route('produk.index') }}" class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">All
                                            products</a></li>
                                    <li><a href="{{ route('produk.index', ['category' => 'Obat Resep']) }}"
                                            class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Obat
                                            Resep</a>
                                    </li>
                                    <li><a href="{{ route('produk.index', ['category' => 'Obat Bebas']) }}"
                                            class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Obat
                                            Bebas</a></li>
                                    <li><a href="{{ route('produk.index', ['category' => 'Vitamin dan Suplemen']) }}"
                                            class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Vitamin
                                            & Suplemen</a></li>
                                    <li><a href="{{ route('produk.index', ['category' => 'Ibu dan Bayi']) }}"
                                            class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Ibu
                                            & Bayi</a>
                                    </li>
                                    <li><a href="{{ route('produk.index', ['category' => 'Beauty dan Skincare']) }}"
                                            class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">Beauty
                                            & Skincare</a>
                                    </li>
                                    <li><a href="{{ route('produk.index', ['category' => 'Peralatan Kesehatan']) }}"
                                            class="link-dark rounded"
                                            style="font-size: 15px; font-family: 'Poppins', sans-serif; font-weight: 400">
                                            Peralatan Kesehatan</a></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class=" col-12 text-md-end pb-4">
                    <h3 class="text-md-start border-bottom py-2"
                        style="font-size: 24px; font-family: 'Poppins', sans-serif; font-weight: 500">
                        {{ $category ?? 'Semua Produk' }}</h3>

                </div>
                <!-- PRoducts -->
                <div class="row">
                    @forelse ($produk as $item)
                    <div class="col-md-4">
                        <div class="card mb-4" style="width: auto">
                            <div class="badge badge-blue card-badge card-badge-left text-uppercase">New</div>
                            @if($item->promo)
                            <div class="badge badge-green card-badge card-badge-left text-uppercase"
                                style="margin-top: 30px;">{{ number_format((($item->harga - $item->harga_promo) /
                                $item->harga) * 100, 0) }}% Off
                            </div>
                            @else
                            @endif
                            <!-- image -->
                            <img src="{{ asset('storage/' . $item->foto) }}" class="card-img-top" alt="" />
                            <div class="card-body" style="margin-left: -1rem;">
                                <h5 class="card-title">{{ $item->nama }}</h5>
                                <a href="{{ route('produk.index', ['category' => $item->kategori->nama]) }}">
                                    <p class="store mb-2"
                                        style="font-family:'Poppins',sans-serif; font-size: 14px; font-weight: 500;">
                                        {{ $item->kategori->nama }}</p>
                                </a>
                                <p class="card-text mb-2"
                                    style="color: #3682f4; font-size: 18px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                                    @if ($item->promo)

                                    <s class="text-muted text-decoration-line-through"
                                        style="font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: 600">
                                        @currency($item->harga)</s>
                                    <s class="text-muted"
                                        style="font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: 600"></s>
                                    @currency($item->harga_promo)
                                    @else
                                    <s class="text-muted"
                                        style="font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: 600"></s>
                                    @currency($item->harga)
                                    @endif

                                </p>
                                <form action="{{ route('produk.store') }}" method="post">
                                    @csrf
                                    @if(Auth::check())
                                    @if(!Auth::user()->is_admin)
                                    <input type="hidden" name="id" value={{ $item->id }}>
                                    <button type="submit" class="shop btn btn-primary mt-3" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title=" Add to cart"><i class="bi bi-cart3"
                                            style="font-size: 17px;"></i></button>
                                    @endif
                                    @else
                                    <input type="hidden" name="id" value={{ $item->id }}>
                                    <button type="submit" class="shop btn btn-primary mt-3" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title=" Add to cart"><i class="bi bi-cart3"
                                            style="font-size: 17px;"></i></button>
                                    @endif
                                    <a type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="View details"
                                        href="{{ route('produk.show', ['produk' => $item->slug]) }}"
                                        class="view btn btn-outline-primary mt-3"><span class="iconify"
                                            data-icon="bi:eye" data-inline="false"
                                            style="font-size: 20px; margin: 1px; align-self: center;"></span></a>
                                </form>


                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="align-items-center d-flex justify-content-center">
                        <p>Tidak Ada Produk </p>
                        {{-- <div class="card mb-4" style="width: auto">

                        </div> --}}
                    </div>
                    @endempty

                    <!-- Pagination -->
                    <nav class="pt-5" aria-label="pagination">

                        <ul class="pagination justify-content-center">

                            {{ $produk->links() }}

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        @if($produk)
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @endif
    </div>
</section>

@stop