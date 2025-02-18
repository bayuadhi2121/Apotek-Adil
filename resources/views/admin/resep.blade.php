@extends('admin.layout.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Resep</h6>
                </div>

                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Foto</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama User</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No Hp</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        status</th>

                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        tanggal</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi</th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resep as $item)
                                <tr>
                                    <td>
                                        <div>
                                            <img src="{{ asset('storage/'. $item->foto) }}"
                                                class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->user->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->user->hp }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->status }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->created_at }}</p>
                                    </td>

                                    <td class="align-middle text-center">
                                        @if($item->status!= 'Ditinjau')
                                        <form action="{{ route('adminResep.destroy',['adminResep'=>$item->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger text-white " data-toggle="tooltip"
                                                data-confirm-delete="true" type="submit"
                                                data-original-title="Edit user">
                                                Hapus
                                            </button>
                                        </form>
                                        @else
                                        <a class="btn text-secondary" data-toggle="tooltip" id="modalButton"
                                            data-bs-toggle="modal" data-bs-target="#modalku" data-toggle="tooltip"
                                            onclick="setEdit('{{ route('adminResep.update', ['adminResep' => $item->id]) }}', '{{ $item->user->nama }}', '{{ $item->foto }}', '{{ $item->status }}', '{{ $item->user->hp }}', '{{ $item->created_at }}')">
                                            Detail
                                        </a>
                                        @endif
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
    {{ $resep->links() }}

    <div class="modal fade" id="modalku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Resep</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form or content here -->
                    <form action="" id="form1" class="col" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="">
                            <label for="user">Nama user</label>
                            <input type="text" name="user" id="nama" readonly class="form-control no-border">
                        </div>
                        <div class="">
                            <label for="user">No Hp</label>
                            <input type="text" name="user" id="hp" readonly class="form-control no-border">
                        </div>
                        <div class="">
                            <label for="user">Tanggal</label>
                            <input type="text" name="user" id="tanggal" readonly class="form-control no-border">
                        </div>
                        <div class="">
                            <label for="foto">Resep</label>
                            <img name="foto" id="foto" name="foto" class="w-90 h-70 form-control no-border">
                        </div>
                        <div class="form-check pt-2">
                            <input class="form-check-input" type="radio" name="pilih" id="flexRadioDefault1"
                                value="Diterima">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Diterima
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pilih" id="flexRadioDefault1"
                                value="Ditolak">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Ditolak
                            </label>
                        </div>
                        <div class="">
                            <label for="catatan">Catatan</label>
                            <input type="text" name="catatan" id="catatan" required class="form-control no-border">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                        <button data-bs-dismiss="modal" onclick="resetFields()"
                            class="btn btn-primary mt-3">Cancel</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
    @endsection
    @section('script')
    <script>
        function setEdit(url,nama,foto,status,hp,tanggal){

        document.getElementById("form1").action = url;
        document.getElementById("nama").value = nama;
        document.getElementById("foto").src = '/storage/' + foto;
        document.getElementById("hp").value = hp;
        document.getElementById("tanggal").value = tanggal;
        }
    </script>
    <script>
        function resetFields() {
      document.getElementById('flexRadioDefault1').value = '';
      document.getElementById("catatan").value = '';
     
      }
    </script>
    <script>
        window.onload = function() {
    resetFields();
    };
    </script>

    @endsection