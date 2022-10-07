@extends('layouts.main')

@section('title', 'Lupa Password')

@section('content')

    <section class="mt-150">
        <div class="container">
            <div class="shadow-sm p-3 mb-5 bg-default rounded">
                <p class="fs-40 lh-sm text-center mt-4">Selamat<b> Datang!</b></p>
                <p class="lh-sm text-center">
                    Selamat datang di halaman login undangayah.com, <br> silahkan pergunakan username dan password yang telah anda miliki
                </p>
                <main class="form-signin w-100 m-auto">
                    <form action="{{ url('login/proses') }}" method="post">
                        @csrf
                        <div class="form-floating">
                            <input autofocus type="text" name="username" value="{{ old('username') }}" required class="form-control
                            @error('username')
                                is-invalid
                            @enderror
                        " id="username" placeholder="pria&wanita">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" required class="form-control
                            @error('password')
                                is-invalid
                            @enderror
                            " id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="text-end">
                            <a href="{{ url('change-password') }}" class="text-decoration-none">Lupa Password</a>
                        </p>
                        <button class="w-100 btn btn-default px-2 py-2 mb-4" type="submit">Login</button>
                        <hr>
                    </form>
                </main>
                <p class="lh-sm text-center">
                    <span class="fw-semibold">Blum punya Undangan?</span><br>
                    <span class="fw-semibold">
                        Silahkan
                        <a href="{{ url('register') }}" class="text-decoration-none">Daftar</a> sebelum anda membuat website pernikahan.
                    </span>
                </p>
                <br>
            </div>
        </div>
    </section>
@endsection
