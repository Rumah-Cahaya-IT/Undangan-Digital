@extends('layouts.main')

@section('title', 'Team Cahaya IT')

@section('content')

    <section class="mt-130" id="home">
        <div class="container">
            <p class="fs-40 lh-sm fw-bold mb-1">Experts</p>
            <!-- <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <p class="fs-20">
                        Di bawah ini adalah projects terbaru dari kami.
                    </p>
                </div>
            </div> -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2 g-lg-4">
                <a href="https://undangyah.cahayait.com/" class="text-decoration-none link-dark text-default">
                    <div class="col">
                        <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                            <div class="text-center">
                                <img src="asset/image/team/ceo.png" class="shadow rounded-5 image-produk">
                                <p class="fs-20 mt-3 mb-2 fw-semibold">Muhadi</p>
                                <p class="fs-16"> Chief Executive Officer </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://webcv.cahayait.com/" class="text-decoration-none link-dark text-default">
                    <div class="col">
                        <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                            <div class="text-center">
                                <img src="asset/image/team/coo.png" class="shadow rounded-5 image-produk">
                                <p class="fs-20 mt-3 mb-2 fw-semibold">Ariyanto</p>
                                <p class="fs-16"> Chief Operating Officer </p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://webcv.cahayait.com/" class="text-decoration-none link-dark text-default">
                    <div class="col">
                        <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                            <div class="text-center">
                                <img src="asset/image/team/cfo.png" class="shadow rounded-5 image-produk">
                                <p class="fs-20 mt-3 mb-2 fw-semibold">Ali Akbar</p>
                                <p class="fs-16"> Chief Financial Officer </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <p class="fs-40 lh-sm fw-bold mb-1 mt-5">Disupport oleh staff berkompeten</p>
        </div>
    </section>

@endsection
