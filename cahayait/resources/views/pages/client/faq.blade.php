@extends('layouts.main')

@section('title', 'FAQ Cahaya IT')

@section('content')

    <section class="mt-130" id="home">
        <div class="container">
            <section class="mt-100">
                <div class="container">
                    <p class="fs-40 lh-sm fw-bold mb-1">FAQ</p>
                    <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button fw-semibold fs-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Berapa harga standart pembuatan aplikasi?
                        </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Setiap aplikasi/sistem memiliki kebutuhan dan tingkat kerumitan yang berbeda-beda. Kami akan memberikan timeline dan harga setelah mendapatkan informasi yang cukup tentang kebutuhan Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed fw-semibold fs-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Saya sudah memiliki aplikasi, apakah tim cahaya it bisa melanjutkannya?
                        </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Ya, Tentunya bisa. Kami akan assess sistem Anda yang sudah ada dan menyesuaikannya dengan penambahan yang Anda inginkan.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed fw-semibold fs-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Bagaimana cara saya dapat memulai konsultasi di cahaya it?
                        </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Anda dapat mengirim pesan melalui website ini pada halaman Hubungi Kami, telepon atau chat whatsapp kami 0895-7022-1231</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

@endsection
