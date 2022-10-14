@extends('layouts.dashboard')
@section('title', 'Tambah Tamu Undangan')
@section('content')

<div class="col-md-8 col-lg-9 order-md-last">
    <div class="shadow-sm p-3 mb-4 bg-default rounded">
        <div class="alert alert-danger" role="alert">
            Saat ini anda menggunakan paket gratis. Anda bisa mengupgrade layanan kapanpun untuk mendapatkan fitur yang lebih lengkap dan menarik
        </div>
        <a href="index.html" role="button" class="btn btn-default-2 px-3 py-2 mx-3">
                                 Lihat Paket Harga
                            </a>
        <a href="index.html" role="button" class="btn btn-default px-3 py-2">
                                 Upgrade Layanan
                            </a>
    </div>
    <div class="d-flex justify-content-end">
        <a href="index.html" role="button" class="btn btn-default px-3 py-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-postcard-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2Zm6 2.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm3.5.878c1.482-1.42 4.795 1.392 0 4.622-4.795-3.23-1.482-6.043 0-4.622ZM2 5.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                                </svg>&nbsp; Lihat Website
        </a>
    </div>
    <div class="shadow-sm p-3 mb-5 bg-default rounded">
        <p class="fs-4 font-semibold">Tambah Tamu Undangan</p>
        <p class="">
            Silahkan masukan nama dan tempat teman/saudara yang akan diundang
        </p>
        <hr class="border border-danger border-2 opacity-50">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat (Opsional)</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Pontianak">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nomor Telepon (Opsional)</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="08957022xxxx">
        </div>
        <button type="submit" class="btn btn-default px-5 py-2 mt-2">Simpan</button>
    </div>
</div>
@endsection
