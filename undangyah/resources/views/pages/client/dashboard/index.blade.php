@extends('layouts.dashboard')

@section('title', 'Dashboard')

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
            <p class="">
                Hai, <span class="font-semibold"> Muhammad Ardiansyah</span>
            </p>
            <p class="">
                Banyak fasilitas yang dapat anda gunakan untuk mempercantik dan melengkapi informasi website pernikahan anda, silahkan gunakan fasilitas dibawah ini.
            </p>
            <div class="row row-cols-2 row-cols-lg-3 g-4 g-lg-4 px-2 py-4">
                <div class="col">
                    <a href="{{ url('dashboard') }}" class="text-decoration-none">
                        <div class="col">
                            <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                                <div class="text-center">
                                    <img src="asset/icon/dashboard/dashboard18.svg" alt="">
                                    <p class="fs-16 mt-2 mb-2 text-body">Dashboard</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <!-- <div class="col">
                <a href="" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard3.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Pengaturan Umum</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->
            <div class="col">
                <a href="{{ url('mempelai-pria') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard15.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Mempelai Pria</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('mempelai-wanita') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard16.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Mempelai Wanita</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('informasi-acara') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard4.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Informasi Acara</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('tamu-undangan') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard8.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Tamu Undangan</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('galeri') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard13.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Galeri</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('cerita-cinta') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard12.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Cerita Cintamu</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('maps') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard14.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Peta Lokasi</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="text-center">
                    <span class="badge text-bg-warning text-white mt-1">Premium</span>
                </div>
            </div>
            <div class="col">
                <a href="{{ url('musik') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard7.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Backgroud Musik</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="text-center">
                    <span class="badge text-bg-warning text-white mt-1">Premium</span>
                </div>
            </div>
            <div class="col">
                <a href="{{ url('kado') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard11.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Kado Nikah</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="text-center">
                    <span class="badge text-bg-warning text-white mt-1">Premium</span>
                </div>
            </div>
            <div class="col">
                <a href="{{ url('doa-dan-ucapan') }}" class="text-decoration-none">
                    <div class="col">
                        <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                            <div class="text-center">
                                <img src="asset/icon/dashboard/dashboard10.svg" alt="">
                                <p class="fs-16 mt-2 mb-2 text-body">Doa dan Harapan</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ url('pilih-tema') }}" class="text-decoration-none">
                    <div class="col">
                            <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                                <div class="text-center">
                                    <img src="asset/icon/dashboard/dashboard6.svg" alt="">
                                    <p class="fs-16 mt-2 mb-2 text-body">Pilih Tema</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <hr class="border border-danger border-2 opacity-50">
            <div class="row row-cols-2 row-cols-lg-3 g-4 g-lg-4 px-2 py-4">
                <div class="col">
                    <a href="{{ url('pengaturan-akun') }}" class="text-decoration-none">
                        <div class="col">
                            <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                                <div class="text-center">
                                    <img src="asset/icon/dashboard/dashboard5.svg" alt="">
                                    <p class="fs-16 mt-2 mb-2 text-body">Pengaturan Akun</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('edit-password') }}" class="text-decoration-none">
                        <div class="col">
                            <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                                <div class="text-center">
                                    <img src="asset/icon/dashboard/dashboard1.svg" alt="">
                                    <p class="fs-16 mt-2 mb-2 text-body">Pengaturan Password</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('hitory-transaksi') }}" class="text-decoration-none">
                        <div class="col">
                            <div class="p-3 shadow-sm bg-default fs-18 font-400 rounded-4 h-100 border">
                                <div class="text-center">
                                    <img src="asset/icon/dashboard/dashboard9.svg" alt="">
                                    <p class="fs-16 mt-2 mb-2 text-body">Histori Transaksi</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

