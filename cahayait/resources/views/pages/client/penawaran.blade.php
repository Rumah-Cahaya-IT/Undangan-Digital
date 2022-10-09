@extends('layouts.main')

@section('title', 'Penawaran Cahaya IT')

@section('content')

    <section class="mt-130">
        <div class="container main-center">
            <p class="fs-40 lh-sm fw-bold">Dapatkan Penawaran</p>
            <main class="flex-shrink-0">
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nama </label>
                            <input type="name" class="form-control" id="name" placeholder="Fulan">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="company" class="form-label">Nama Preusahaan / Instansi / Perorangan</label>
                            <input type="company" class="form-control" id="company" placeholder="Indonesia Jaya">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="no_hp" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_hp" placeholder="+6287-0221-xxxx" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="proyek" class="form-label">Judul Proyek</label>
                            <input type="text" class="form-control" id="proyek" placeholder="WEB APP" required>
                            <div class="invalid-feedback">
                                Please enter your shipping proyek.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="budget" class="form-label">Estimasi Budget</label>
                            <input type="budget" class="form-control" id="budget" placeholder="lima juta" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="budget" class="form-label">Tingkat Penawaran</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Tingkat Penawaran</option>
                                <option value="1">Penting</option>
                                <option value="2">Sedang</option>
                                <option value="3">Biasa</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="formFile" class="form-label">Lampirkan File</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <hr class="my-4">

                        <button class="btn btn-default px-2" type="submit">Kirim Permintaan Penawaran</button>
                </form>
            </main>
            </div>
    </section>

@endsection
