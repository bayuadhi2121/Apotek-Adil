@extends('admin.layout.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Transaksi</h6>
                </div>

                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama Pelanggan</th>

                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        tanggal</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        status</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Jumlah</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $item)
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->user->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->created_at }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{ $item->status }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">Online</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('adminTransaksi.show',['adminTransaksi'=>$item->id]) }}"
                                            type="submit" class="btn text-secondary font-weight-bold text-xs ">
                                            Detail
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
@endsection