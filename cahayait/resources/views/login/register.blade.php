@extends('layouts.main')

@section('title', 'Register')

@section('content')

    <section class="mt-150">
        <div class="container">
            <div class="shadow-sm p-3 mb-5 bg-default rounded">
                <p class="fs-40 lh-sm text-center mt-4">Daftar akun<b> UndangYah</b></p>
                <main class="form-signin w-100 m-auto">
                    <form>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="duapasang" placeholder="Nama Pasangan">
                            <label for="floatingInput">Nama Pasangan</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                            <label for="floatingInput">Nama Lengkap</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-default px-2 py-2 mb-4" type="submit">Daftar</button>
                        <hr>
                    </form>
                </main>
                <p class="lh-sm text-center">
                    <span>
                        Sudah punya akun? <a href="{{ url('login') }}" class="text-decoration-none font-semibold"> Masuk sekarang</a>
                    </span>
                    <br><br>
                    <span>Dengan mengirimkan informasi diatas untuk pendaftaran,</span>
                    <br>
                    <span>
                        berarti anda telah menyetujui Ketentuan Layanan undangyah.com
                    </span>
                </p>
                <br>
            </div>
        </div>
    </section>

@endsection
