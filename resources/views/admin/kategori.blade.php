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
                                        No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kategori</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <div>
                                                    <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal"
                                            href="" data-bs-target="#exampleModaledit" data-toggle="tooltip"
                                            onclick="setEdit('{{ route('adminKategori.update', ['adminProduk' => $item->id]) }}', '{{ $item->nama }}' ">
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
                <form method="POST" action="{{ route('adminKategori.store') }}" enctype="multipart/form-data">
                    <!-- Your form fields go here -->

                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
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
                        <label for="productName" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                    </div>

                    <div cass="modal-footer">
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
    function setEdit(url,nama){
    document.getElementById("form1").action = url;
    document.getElementById("nama").value = nama;
    // document.getElementById("foto").value = foto; 
      
    }
</script>
<script>
    function resetFields() {
  document.getElementById('nama').value = '';

  }
</script>
@endsection