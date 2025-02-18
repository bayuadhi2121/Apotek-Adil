@extends('admin.layout.layout')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="d-flex justify-content-between">
                    <div class="card-header pb-0">
                        <h6>Data Transaksi Atas Nama {{ $nama->trx->user->nama }}</h6>
                        <h6>Nomor Telfon : {{ $nama->trx->user->hp }}</h6>
                    </div>
                    <div class="card-header pb-0">
                        @if($nama->trx->status=='Ditinjau')
                        <a href="{{ route('adminDetail.edit',['adminDetail'=>$nama->trx->id.'!'.'Diterima']) }}"
                            class="btn text-secondary font-weight-bold text-xs ">
                            Selesai
                        </a>
                        <a href="{{ route('adminDetail.edit',['adminDetail'=>$nama->trx->id.'!'.'Ditolak']) }}"
                            type="submit" class="btn text-secondary font-weight-bold text-xs ">
                            Tolak
                        </a>
                        @else
                        @if($nama->trx->status=='Ditolak')
                        <a class="btn btn-danger text-white font-weight-bold text-xs ">
                            {{ $nama->trx->status }}
                        </a>
                        @else
                        <a class="btn btn-success text-white font-weight-bold text-xs ">
                            {{ $nama->trx->status }}
                        </a>
                        @endif
                        @endif
                    </div>

                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        gambar</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        produk</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        jumlah</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        total</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($detail as $item)
                                    <td>
                                        <img src="{{ asset('storage/'.$item->produk->foto) }}" alt=""
                                            style="width: 50px">
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->produk->nama }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->qty }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->qty*$item->produk->harga }}
                                        </p>
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
    @endsection