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
                                            $item->kategori}}</p>
                                        {{-- <p class="text-xs font-weight-bold mb-0">{!!
                                            html_entity_decode($item->deskripsi)!!}</p> --}}
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
                                            onclick="setEdit('{{ route('adminProduk.update', ['adminProduk' => $item->id]) }}', '{{ $item->nama }}', '{{ $item->deskripsi }}', '{{ $item->kategori }}', '{{ $item->harga }}', '{{ $item->stok }}', '{{ $item->kandungan }}', '{{ $item->indikasi }}', '{{ $item->aturanpakai }}', '{{ $item->perhatian }}')">
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
                    <!-- Your form fields go here -->

                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Indikasi</label>
                        <textarea class="form-control" name="indikasi"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Aturan Pakai</label>
                        <textarea class="form-control" name="aturanpakai"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Perhatian</label>
                        <textarea class="form-control" name="perhatian"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Kandungan Utama</label>
                        <input class="form-control" rows="3" placeholder="Kandungan Utama Obat" name="kandungan">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Kategori</label>
                        <input class="form-control" rows="3" placeholder="Kategori" name="kategori">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Harga</label>
                        <input class="form-control" rows="3" placeholder="Harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Stok</label>
                        <input class="form-control" rows="3" placeholder="Stok" name="stok">
                    </div>

                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="foto">
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
                        <input class="form-control" id="kategori" rows="3" placeholder="Kategori" name="kategori">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Harga</label>
                        <input class="form-control" id="harga" rows="3" placeholder="Harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="productDescription" class="form-label">Stok</label>
                        <input class="form-control" id="stok" rows="3" placeholder="Stok" name="stok">
                    </div>

                    <div class="mb-3">
                        <label for="productImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="foto" name="foto">
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

@endsection