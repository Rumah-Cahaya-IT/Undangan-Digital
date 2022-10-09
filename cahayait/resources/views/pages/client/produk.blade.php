@extends('layouts.main')

@section('title', 'Produk Cahaya IT')

@section('content')

    <section class="mt-130" id="home">
        <div class="container">
            <p class="fs-40 lh-sm fw-bold mb-1">Produk Kami</p>
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <p class="fs-20">
                        Kami fokus menciptakan produk-produk digital yang dikembangkan sesuai dengan kebutuhan pasar. Sehingga produk digital yang dikembangkan oleh Cahaya IT dapat digunakan oleh banyak pihak.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2 g-lg-4">
                <a href="https://undangyah.cahayait.com/" class="text-decoration-none link-dark text-default">
                    <div class="col">
                        <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                            <div class="text-center">
                                <img src="asset/image/produk2.svg" class="shadow rounded-5 image-produk">
                                <img src="asset/image/logo.png" width="180" class="mt-3">
                            </div>
                            <p class="fs-20 mt-3 mb-2 fw-semibold">UndangYah</p>
                            <p class="fs-16"> Undangan digital yang dibuat dalam bentuk digital, baik berupa gambar, video ataupun berupa undangan online </p>
                        </div>
                    </div>
                </a>
                <a href="https://webcv.cahayait.com/" class="text-decoration-none link-dark text-default">
                    <div class="col">
                        <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                            <div class="text-center">
                                <img src="asset/image/produk1.svg" class="shadow rounded-5 image-produk">
                                <img src="asset/image/logo2.svg" width="150" class="mt-3">
                            </div>
                            <p class="fs-20 mt-3 mb-2 fw-semibold">WebCV</p>
                            <p class="fs-16"> Weblog pribadi atau komersil sebagai bagian dari jejaring sosial untuk berbagi data, music, tutorial dan banyak lagi </p>
                        </div>
                    </div>
                </a>
                <!-- <div class="col">
                    <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                        <div class="text-center">
                            <img src="asset/image/tema11.svg" alt="">
                            <img src="asset/image/logo.png" width="180" class="mt-3">
                        </div>
                        <p class="fs-20 mt-3 mb-2 fw-semibold">UndangYah</p>
                        <p class="fs-16"> Undangan digital yang dibuat dalam bentuk digital, baik berupa gambar, video ataupun berupa undangan online </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

@endsection
