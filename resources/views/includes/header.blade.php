<nav class="navbar navbar-expand-lg navbar-light navanimate py-4">
    <div class="container">
        <a class="navbar-brand" href="#"> <img src="" alt="" width="115" height="40" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07"
            aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resep</a>
                </li>
                <!-- test -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile.index')}}">Profile</a>
                </li>
                <!--  -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('produk.index')}}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kategori</a>
                </li>
            </ul>
            <div class="d-flex flex-wrap align-items-center justify-content-start">
                <form class="search" role="search" action="">
                    <i class="fa fa-search"></i>
                    <input class="form-control " type="search" placeholder="Cari Obat" aria-label="Search">
                    <!-- <input type="submit" hidden /> -->
                </form>
                <div class="flex-shrink-0 dropdown">
                    <!-- <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                     <div class="flex-shrink-0 dropdown">
                     <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                         <img src="{{asset('image/undraw_medicine_b-1-ol(1) 1.png')}} " alt="profile pic" width="32" height="32" class="rounded-circle" />
                     </a>
                     <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                         <li><a class="dropdown-item" href="#">Profile</a></li>
                         <li><a class="dropdown-item" href="#">Daftar Transaksi</a></li>
                         <li>
                             <hr class="dropdown-divider" />
                         </li>
                         <li><a class="dropdown-item" href="">Sign out</a></li>
                     </ul> -->
                </div>
                </ul>
            </div>
            <a class="btn btn-outline-primary" href="{{ route('cart.index') }}">
                <i class="fa-solid fa-cart-shopping pe-2 " style="font-size: 17px; "></i>Cart
            </a>
            <a class=" btn btn-labeled btn-primary mx-2" href=""><i class="fa-solid fa-user pe-2"></i> Login</a>

        </div>
    </div>
    </div>
</nav>