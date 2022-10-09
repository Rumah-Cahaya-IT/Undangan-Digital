@extends('layouts.main')

@section('title', 'Proses Cahaya IT')

@section('content')

    <section class="mt-130" id="home">
        <div class="container">
            <p class="fs-40 lh-sm fw-bold mb-1">Proses kami</p>
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <p class="fs-20">
                        Kami mengikuti proses pengembangan perangkat lunak yang kuat dan efektif untuk membangun aplikasi unggulan.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-5 mt-2 g-lg-4">
                <div class="col">
                    <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                        <div class="row row-cols-2">
                            <div class="col-2">
                                <img src="asset/icon/pks1.svg" class="icon-pk">
                            </div>
                            <div class="col-10 ps-muy fs-30 mt-2 mb-2 fw-semibold">Pengumpulan Persyaratan</div>
                        </div>
                        <p class="fs-18 mt-2"> Mengumpulkan informasi mengenai masalah, solusi, dan spesifikasi produk dan teknis. </p>
                        <p class="fs-18 mt-2">
                            Informasi yang disampaikan dapat berupa dokumen requirement (BRD, SRS, URS, Lainnya) atau disampaikan melalui meeting.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                        <div class="row row-cols-2">
                            <div class="col-2">
                                <img src="asset/icon/pks4.svg" class="icon-pk">
                            </div>
                            <div class="col-10 ps-muy fs-30 mt-2 mb-2 fw-semibold">Perkembangan</div>
                        </div>
                        <p class="fs-18 mt-2">
                            Proses pengkodean aplikasi yang secara berkala akan dilaporkan dan ditest untuk memastikan fitur sudah sesuai dan menghindari adanya bugs.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                        <div class="row row-cols-2">
                            <div class="col-2">
                                <img src="asset/icon/pks2.svg" class="icon-pk">
                            </div>
                            <div class="col-10 ps-muy fs-30 mt-2 mb-2 fw-semibold">Merancang</div>
                        </div>
                        <p class="fs-18 mt-2">
                            Prototype atau desain solusi akan diberikan kepada klien agar memudahkan proses konsultasi dan menyamakan ekspektasi antara tim Kelola dan klien.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 shadow-sm bg-default fs-18 font-400 rounded-4 h-100">
                        <div class="row row-cols-2">
                            <div class="col-2">
                                <img src="asset/icon/pks3.svg" class="icon-pk">
                            </div>
                            <div class="col-10 ps-muy fs-30 mt-2 mb-2 fw-semibold">Menguji & Menyebarkan</div>
                        </div>
                        <p class="fs-18 mt-2">UAT atau testing dilakukan oleh tim Kelola dan klien sebagai proses verifikasi bahwa solusi atau fitur yang dibuat dalam sistem sudah sesuai requirement. </p>
                        <p class="fs-18 mt-2">
                            Dilanjutkan dengan proses deployment atau launching versi final dari sistem yang dibuat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
