@extends('admin.layout.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Produk Apotek Adil</h6>
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        onclick="resetFields()">Tambah
                        Produk</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Produk</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Kategori</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Harga</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Stok</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                    alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{
                                            $item->kategori->nama}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->harga }}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $item->stok }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal"
                                            href="" data-bs-target="#exampleModaledit" data-toggle="tooltip"
                                            onclick="setEdit('{{ route('adminProduk.update', ['adminProduk' => $item->id]) }}', `{{ $item->nama }}`, `{{ $item->deskripsi }}`, '{{ $item->kategori->id }}', '{{ $item->harga }}', '{{ $item->stok }}', '{{ $item->kandungan }}', `{{ $item->indikasi }}`, `{{ $item->aturanpakai }}`, `{{ $item->perhatian }}`,'{{ $item->foto }}','{{ $item->promo }}','{{ $item->harga_promo }}')">
                                            Edit
                                        </a>
                                        <a class="text-secondary font-weight-bold text-xs px-2"
                                            href="{{ route('adminProduk.destroy', $item->id) }}"
                                            data-confirm-delete="true" data-toggle="tooltip">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form or content here -->
                <form method="POST" action="{{ route('adminProduk.store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                        @error('nama')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Indikasi</label>
                        <textarea class="form-control" name="indikasi" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Aturan Pakai</label>
                        <textarea class="form-control" name="aturanpakai" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Perhatian</label>
                        <textarea class="form-control" name="perhatian" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Kandungan Utama</label>
                        <input class="form-control" rows="3" placeholder="Kandungan Utama Obat" name="kandungan"
                            required>
                    </div>


                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Kategori</label>
                        <select class="form-control" name="id_kategori" placeholder="Pilih Kategori " required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach($kategori as $category)

                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                        @error('id_kategori')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Harga</label>
                        <input class="form-control" rows="3" placeholder="Harga" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Stok</label>
                        <input class="form-control" rows="3" placeholder="Stok" name="stok" required>
                    </div>

                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="foto" required>
                        <small class="form-text text-muted">Upload an image for the product.</small>
                    </div>

                    <div class="mb-3">
                        <img id="imagePreview" src="#" alt="Product Image Preview"
                            style="max-width:40%; display: none;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modaledit" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form or content here -->
                <form method="POST" action="" id="form1" enctype="multipart/form-data">
                    @method("put")
                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                        @error('nama')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea id="deskripsi" class="form-control" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Indikasi</label>
                        <textarea id="indikasi" class="form-control" name="indikasi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Aturan Pakai</label>
                        <textarea id="aturanpakai" class="form-control" name="aturanpakai"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Perhatian</label>
                        <textarea id="perhatian" class="form-control" name="perhatian"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Kandungan Utama</label>
                        <input class="form-control" id="kandungan" rows="3" placeholder="Kandungan Utama Obat"
                            name="kandungan">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori">
                            <option selected value="">Open this select menu</option>
                            @foreach($kategori as $category)

                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Harga</label>
                        <input class="form-control" id="harga" rows="3" placeholder="Harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Promo</label>
                        <label class="switch">
                            <input name="promo" type="checkbox" id="toggleSwitch">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="mb-3 promo" id="promo">
                        <label for="" class="form-label">Harga Promo</label>
                        <input class="form-control" rows="3" placeholder="" name="harga_promo" id="harga_promo"
                            value="">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Stok</label>
                        <input class="form-control" id="stok" rows="3" placeholder="Stok" name="stok">
                    </div>

                    <div class="mb-3">
                        <label for="productImage" class="form-label" id="productImageLabel">Product Image</label>

                        <input type="file" class="form-control" id="foto" name="foto" onchange="updateFileName(this)">
                        <small class="form-text text-muted">Upload an image for the product.</small>
                        <div class="input-group">
                            <small class="form-text">Gambar Sekarang : <span id="ganti">Kosong</span></small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <img id="imagePreview" src="#" alt="Product Image Preview"
                            style="max-width:40%; display: none;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    function setEdit(url, nama, deskripsi, kategori, harga, stok, kandungan, indikasi, aturanpakai, perhatian, foto, promo, harga_promo) {
        document.getElementById("form1").action = url;
        console.log(nama);
        document.getElementById("nama").value = nama;
        document.getElementById('deskripsi').value = deskripsi;
        document.getElementById("id_kategori").value = kategori;
        document.getElementById("harga").value = harga;
        document.getElementById("stok").value = stok;
        document.getElementById("kandungan").value = kandungan;
        document.getElementById("indikasi").value = indikasi;
        document.getElementById("aturanpakai").value = aturanpakai;
        document.getElementById("perhatian").value = perhatian;
        console.log(promo);
        document.getElementById("toggleSwitch").checked = promo == 1;
        document.getElementById("harga_promo").value = harga_promo;
        var toggleSwitch = document.getElementById("toggleSwitch");
        var promoInput = document.querySelector(".promo");

        // Set the initial state based on the checkbox
        promoInput.style.display = toggleSwitch.checked ? "block" : "none";

        // Add an event listener to the slider to toggle the input field
        toggleSwitch.addEventListener("change", function () {
            promoInput.style.display = toggleSwitch.checked ? "block" : "none";
        });
        var fileNameSpan = document.getElementById("ganti");
        fileNameSpan.textContent = foto;

        // console.log(kategori);
        const idKategoriSelect = document.getElementById("id_kategori");

        // Loop through options to find and select the matching one
        for (let i = 0; i < idKategoriSelect.options.length; i++) {
            if (idKategoriSelect.options[i].value === kategori) {
                idKategoriSelect.options[i].selected = true;
                break; // Exit the loop once a match is found
            }
        }
    }

    function updateFileName(input) {
        // Update the label next to the file input
        var fileNameSpan = document.getElementById("ganti");
        fileNameSpan.textContent = input.files[0].name;
    }
</script>
<script>
    function resetFields() {
  document.getElementById('nama').value = '';
  document.getElementById("deskripsi").value = '';
  document.getElementById('kategori').value = '';
  document.getElementById('harga').value = '';
  document.getElementById('stok').value = '';
  document.getElementById('kandungan').value = '';
  document.getElementById("indikasi").value = '';
  document.getElementById("aturanpakai").value = '';
  document.getElementById("perhatian").value = '';
  document.getElementById("foto").value = '';
  document.getElementById("toggleSwitch").value = '';
  document.getElementById("harga_promo").value = '';
  }
</script>
<script>
    // Get the slider and input elements
  var toggleSwitch = document.getElementById("toggleSwitch");
  var promoInput = document.querySelector(".promo");

  // Set the initial state based on the checkbox
  promoInput.style.display = toggleSwitch.checked ? "block" : "none";

  // Add an event listener to the slider to toggle the input field
  toggleSwitch.addEventListener("change", function() {
    promoInput.style.display = toggleSwitch.checked ? "block" : "none";
  });
</script>

@endsection