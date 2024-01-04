@extends('layout.layout')

@section('content')
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-5 col-xl-4">
                <img src="{{ asset('image/undraw_sign_up_n6im.svg') }}" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="{{ route('login.store') }}" method="POST">
                    <!-- Email input -->
                    @csrf
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example3">Nama Lengkap</label>
                        <input type="text" id="form3Example3" class="form-control " name="nama"
                            placeholder="Masukkan Nama Lengkap Anda" />
                        @error('nama')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Username</label>
                        <input type="text" id="form3Example3" name="username" class="form-control"
                            placeholder="Masukkan Username" />
                        @error('username')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example3">Alamat</label>
                        <input type="text" id="form3Example3" class="form-control " name="alamat"
                            placeholder="Masukkan Alamat Anda" />
                        @error('alamat')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">No Telfon</label>
                        <input type="number" id="form3Example3" class="form-control " name="hp"
                            placeholder="Pastikan No telfon Aktif dan Benar" />
                        @error('hp')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" class="form-control" name="password"
                            placeholder="Enter password" />
                        @error('password')
                        <span class="error text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="text-center text-lg-start mt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Sudah Punya Akun ? <a href="{{ route('login.index') }}"
                                class="link-danger">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
@endsection