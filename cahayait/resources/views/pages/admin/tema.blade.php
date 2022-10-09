@extends('layouts.main')

@section('title', 'Tema Undang Yah')

@section('content')

    <section class="mt-55" id="tema">
        {{-- <div class="bg-default-2"> --}}
            <div class="container">
                <div class="pt-60">
                    <p class="fs-40 lh-sm cr-default fw-bold mb-1">Temukan Tema Unik dan Menarik</p>
                    <p class="fs-20">Silahkan klik gambar dibawah ini untuk melihat contoh</p>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 g-4 mt-4 g-lg-4">
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="asset/image/tema1.svg" class="w-image-tema"></a>
                    </div>
                </div>
                <div class="py-60">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link text-body" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link text-body" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-body" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-body" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link text-body" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        {{-- </div> --}}
    </section>

@endsection
