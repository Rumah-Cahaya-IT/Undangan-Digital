@extends('layouts.main')

@section('title', 'Lupa Password')

@section('content')

    <section class="mt-150">
        <div class="container">
            <div class="shadow-sm p-3 mb-5 bg-default rounded">
                <p class="fs-40 lh-sm text-center mt-4">Bantuan Lupa<b> Password</b></p>
                <main class="form-signin w-100 m-auto">
                    <form>
                        <div class="form-floating">
                            <input type="changepassword" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Masukkan email anda</label>
                        </div>
                        <button class="w-100 btn btn-default px-2 py-2 mt-4 mb-4" type="submit">Kirim</button>
                        <hr>
                    </form>
                </main>
                <p class="lh-sm text-center">
                    Silahkan masukan email yang anda gunakan untuk melakukan pendaftaran <br> kami akan mengirimkan informasi password kepada anda melalui email.
                </p>
                <br>
            </div>
        </div>
    </section>

@endsection
