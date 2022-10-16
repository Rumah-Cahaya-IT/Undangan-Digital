@extends('layouts.main')

@section('title', 'Penawaran Cahaya IT')

@section('content')

    <section class="mt-130">
        <div class="container main-center">
            <p class="fs-40 lh-sm fw-bold">Dapatkan Penawaran</p>
            <main class="flex-shrink-0">
                <form class="needs-validation" action="{{ route('penawaran.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nama </label>
                            <input type="name" class="form-control" name="name" id="name" placeholder="Fulan" required>
                        </div>
                        <div class="col-12">
                            <label for="company" class="form-label">Nama Preusahaan / Instansi / Perorangan</label>
                            <input type="company" class="form-control" name="prusahaan" id="prusahaan" placeholder="Indonesia Jaya" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="no_hp" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="+6287-0221-xxxx" required>
                        </div>
                        <div class="col-12">
                            <label for="proyek" class="form-label">Judul Proyek</label>
                            <input type="text" class="form-control" name="judul_proyek" id="judul_proyek" placeholder="WEB APP" required>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Pesan</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" required rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="bedget" class="form-label">Estimasi Bedget</label>
                            <input type="bedget" class="form-control" name="bedget" id="bedget" placeholder="lima juta" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="level" class="form-label">Tingkat Penawaran</label>
                            <select class="form-select" name="level" id="level" aria-label="Default select example">
                                <option selected>Tingkat Penawaran</option>
                                <option value="1">Penting</option>
                                <option value="2">Sedang</option>
                                <option value="3">Biasa</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label for="formFile" class="form-label">Lampirkan File</label>
                            <input class="form-control" type="file" autocomplete="off" name="file" id="file">
                        </div>
                        <hr class="my-4">
                        <button class="btn btn-default px-2" type="submit">Kirim Permintaan Penawaran</button>
                    </div>
                </form>
            </main>
            </div>
    </section>

@endsection
