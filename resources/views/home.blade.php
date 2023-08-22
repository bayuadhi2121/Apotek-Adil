<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="{{ asset('css/app.css')}}" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
  <div class="main" id="fullpage">
    <div class="section s1" id="s1">
      <nav class="navbar navbar-expand-xxl py-4 fixed-top">
        <div class="container-fluid mx-lg-5 px-4">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse mx-auto " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Resep</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategori
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form class="search ml-5" role="search" action="">
              <i class="fa fa-search"></i>
              <input class="form-control " type="search" placeholder="Cari Obat" aria-label="Search">
              <!-- <input type="submit" hidden /> -->
            </form>
            <div class="d-flex col-me-2 px-4 py-2 gap-3">
              <button type="button" class="btn keranjang "><i class="fa-solid fa-cart-shopping pe-2"></i>Keranjang</button>
              <button type="button" class="btn btn-secondary login py-2"> <i class="fa-solid fa-user pe-2"></i> Login</button>
            </div>
          </div>
      </nav>
      <div class="container container-heroes col-xxxl-10 px-4 py-lg-5 align-items-center">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-lg-7 col-lg-6 px-lg-5">
            <img src="{{asset('image/undraw_medicine_b-1-ol(1) 1.png')}}" class=" heroes d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="1000" height="1000">
          </div>
          <div class="col-lg-5 px-4 text">
            <h1 class="display-4 fw-bold text-body-emphasis lh-4 mb-3 welcome">Selamat Datang</h1>
            <h1 class="display-4 fw-bold text-body-emphasis lh-4 mb-3 welcome1 ">Apotek Adil</h1>
            <p class="lead welcome2">Ada yang bisa kami bantu ?</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start  py-3 button-container">
              <button type="button" class="btn cari text-white btn-lg px-4 me-md-2">Cari Obat</button>
              <button type="button" class="btn resep btn-lg px-4">Upload Resep</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="section s2" id="s2">
      <div class="container px-4 py-5 mt-lg-2" id="icon-grid">
        <h1 class="pb-2 border-bottom">Kategori</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
          <div class="d-flex flex-column align-items-center ">
            <a href="#" class="kategori m-0">
              <img src="{{asset('image/Group 21.png')}}" alt="" width="85px" height="85px" class=" icon ms-4">
              <h3 class=" mb-0 fs-5 text-body-emphasis py-3 text">Upload Resep</h3>
            </a>
          </div>
          <div class="pb-3 d-flex flex-column align-items-center ">
            <a href="#" class=" kategori m-0">
              <img src="{{asset('image/Group 22.png')}}" alt="" width="85px" height="85px" class=" icon ms-3">
              <h3 class=" mb-0 fs-5 text-body-emphasis py-3 text">Obat Resep</h3>
            </a>
          </div>
          <div class="pb-3 d-flex flex-column align-items-center ">
            <a href="#" class=" kategori m-0">
              <img src="{{asset('image/Group 23.png')}}" alt="" width="85px" height="85px" class=" icon ms-3">
              <h3 class=" mb-0 fs-5 text-body-emphasis py-3 text">Obat Bebas</h3>
            </a>
          </div>
          <div class="pb-3 d-flex flex-column align-items-center">
            <a href="#" class=" kategori m-0">
              <img src="{{asset('image/Group 24.png')}}" alt="" width="85px" height="85px" class="icon ms-3">
              <h3 class=" mb-0 fs-5 text-body-emphasis text pt-3">Vitamin &<br></h3>
              <h3 class=" fs-5 text-body-emphasis text ">Supplement <br></h3>
            </a>
          </div>
          <div class="pt-5  d-flex flex-column align-items-center">
            <a href="#" class=" kategori m-0 ">
              <img src="{{asset('image/Group 25.png')}}" alt="" width="85px" height="85px" class="icon ms-2">
              <h3 class=" mb-0 fs-5 text-body-emphasis text py-3">Ibu & Bayi</h3>
            </a>
          </div>
          <div class="pt-5  d-flex flex-column align-items-center">
            <a href="#" class=" kategori m-0">
              <img src="{{asset('image/Group 26.png')}}" alt="" width="85px" height="85px" class="icon ms-1">
              <h3 class=" mb-0 fs-5 text-body-emphasis text pt-3">Beauty & <br></h3>
              <h3 class=" mb-0 fs-5 text-body-emphasis text pt-1">SkinCare</h3>
            </a>
          </div>
          <div class="pt-5  d-flex flex-column align-items-center">
            <a href="#" class=" kategori m-0 ">
              <img src="{{asset('image/Group 27.png')}}" alt="" width="85px" height="85px" class="icon ms-4 ">
              <h3 class=" mb-0 fs-5 text-body-emphasis  text pt-3">Alat Kesehatan<br></h3>
            </a>
          </div>
          <div class="pt-5  d-flex flex-column align-items-center">
            <a href="#" class=" kategori m-0">
              <img src="{{asset('image/Group 28.png')}}" alt="" width="85px" height="85px" class="icon ms-4">
              <h3 class=" mb-0 fs-5 text-body-emphasis pt-3 text">Semua Kategori<br></h3>
            </a>
          </div>

        </div>
      </div>
    </section>

    <section class="section s3">
      <div class="container1">
        <h1>test</h1>
      </div>
      <div class="container mb-0">
        <footer class="foot row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5  border-top">
          <div class="col mb-3">
            <p class="text-body-secondary">&copy; 2023</p>
          </div>

          <div class="col mb-3">

          </div>

          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>

          <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
          </div>
        </footer>
      </div>
    </section>

  </div>

  <script src="https://kit.fontawesome.com/cd233d4cf9.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>

  </script>

</body>

</html>