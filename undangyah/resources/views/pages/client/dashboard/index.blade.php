@extends('layouts.main')

@section('title', 'Undang Yah')

@section('content')
    <section class="mt-100" id="home">
        <div class="container">
            <main>
                <div class="row g-4">
                    <div class="col-md-4 col-lg-3">
                        <div class="shadow-sm p-3 mb-2 bg-default rounded">
                            <div class="d-flex justify-content-center">
                                <div class="p-3 fs-18 font-400 rounded-4 h-100">
                                    <div class="text-center">
                                        <img src="asset/icon/da.svg" width="100">
                                        <p class="fs-16 mt-2 mb-2 text-body">Muhammad Ardiansyah</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group mb-3">
                                <a href="dashboard_1.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-heart" viewBox="0 0 16 16">
                                                <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982Z"/>
                                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                                            </svg> &nbsp; Dashboard
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <!-- <a href="" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                                            </svg> &nbsp; Pengaturan Umum
                                            </p>
                                        </div>
                                    </li>
                                </a> -->
                                <a href="mempelai_pria.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16">
                                                <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
                                            </svg> &nbsp; Mempelai Pria
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="mempelai_wanita.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
                                            </svg> &nbsp; Mempelai Wanita
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="Informasi Acara.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-calendar2-heart" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3Zm2 .5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V4a.5.5 0 0 0-.5-.5H3Zm5 4.493c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                            </svg> &nbsp; Informasi Acara
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="tamu_undangan.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope-paper-heart" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v1.133l.941.502A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765L2 3.133V2Zm0 2.267-.47.25A1 1 0 0 0 1 5.4v.817l1 .6v-2.55Zm1 3.15 3.75 2.25L8 8.917l1.25.75L13 7.417V2a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v5.417Zm11-.6 1-.6V5.4a1 1 0 0 0-.53-.882L14 4.267v2.55ZM8 2.982C9.664 1.309 13.825 4.236 8 8 2.175 4.236 6.336 1.31 8 2.982Zm7 4.401-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734Z"/>
                                            </svg> &nbsp; Tamu Undangan
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="galeri.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                            </svg> &nbsp; Geleri
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="cerita cinta.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-hearts" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z"/>
                                            </svg> &nbsp; Cerita Cintamu
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="musik.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                                                <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                                <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                                                <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                                                <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                                            </svg> &nbsp; Background Music
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="maps.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-map" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98 4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                                            </svg> &nbsp; Peta Lokasi
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="kado.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box2-heart" viewBox="0 0 16 16">
                                                <path d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982Z"/>
                                                <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5Zm0 1H7.5v3h-6l2.25-3ZM8.5 4V1h3.75l2.25 3h-6ZM15 5v10H1V5h14Z"/>
                                            </svg> &nbsp; Kado Nikah
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="ucapan.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chat-heart" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M2.965 12.695a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2Zm-.8 3.108.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125ZM8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                            </svg> &nbsp; Doa dan Harapan
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="pilih-tema.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pc-display" viewBox="0 0 16 16">
                                                <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                                            </svg> &nbsp; Pilih Tema
                                            </p>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                            <ul class="list-group mb-3">
                                <a href="pengaturan_akun.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                                            </svg> &nbsp; Pengaturan Akun
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="pengaturan_sandi.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                            </svg> &nbsp; Pengaturan Password
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="histori_transaksi.html" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                            </svg> &nbsp; Histori Transaksi
                                            </p>
                                        </div>
                                    </li>
                                </a>
                                <a href="" class="text-decoration-none">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <p class="my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                            </svg> &nbsp; Keluar
                                            </p>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
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
                                    <a href="dashboard_1.html" class="text-decoration-none">
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
                                    <a href="mempelai_pria.html" class="text-decoration-none">
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
                                    <a href="mempelai_wanita.html" class="text-decoration-none">
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
                                    <a href="Informasi Acara.html" class="text-decoration-none">
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
                                    <a href="tamu_undangan.html" class="text-decoration-none">
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
                                    <a href="galeri.html" class="text-decoration-none">
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
                                    <a href="cerita cinta.html" class="text-decoration-none">
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
                                    <a href="maps.html" class="text-decoration-none">
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
                                    <a href="musik.html" class="text-decoration-none">
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
                                    <a href="kado.html  " class="text-decoration-none">
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
                                    <a href="ucapan.html" class="text-decoration-none">
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
                                    <a href="pilih-tema.html" class="text-decoration-none">
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
                                    <a href="pengaturan_akun.html" class="text-decoration-none">
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
                                    <a href="pengaturan_sandi.html" class="text-decoration-none">
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
                                    <a href="histori_transaksi.html" class="text-decoration-none">
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
                </div>
            </main>
        </div>
    </section>
    <section class="mt-100">
        <div class="bg-default-2">
            <div class="container">
                <div class="py-4">
                    <div class="row g-4 mt-4">
                        <div class="col-sm-6 pe-40">
                            <p class="fs-24 lh-sm cr-default fw-bold">Metode Pembayaran</p>
                            <div class="row row-cols-2 row-cols-lg-4 g-1 g-lg-3">
                                <div class="col">
                                    <img src="asset/icon/banks/bsi.svg" width="110">
                                </div>
                                <div class="col">
                                    <img src="asset/icon/banks/bni.svg" width="110">
                                </div>
                                <div class="col">
                                    <img src="asset/icon/banks/bri.svg" width="110">
                                </div>
                                <div class="col">
                                    <img src="asset/icon/banks/shopepay.svg" width="110">
                                </div>
                                <div class="col">
                                    <img src="asset/icon/banks/mandiri.svg" width="110">
                                </div>
                                <div class="col">
                                    <img src="asset/icon/banks/gopay.svg" width="110">
                                </div>
                                <div class="col">
                                    <img src="asset/icon/banks/ovo.svg" width="110">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="fs-24 lh-sm cr-default fw-bold">Lebih Dekat dengan Kami</p>
                            <div class="row row-cols-2 row-cols-lg-2 g-5">
                                <div class="col">
                                    <img src="asset/icon/facebook.svg" width="25">
                                    <span class="fs-16 cr-default">
                                        Undangyah
                                    </span>
                                </div>
                                <div class="col">
                                    <img src="asset/icon/instagram.svg" width="25">
                                    <span class="fs-16 cr-default">
                                        @undangyah
                                    </span>
                                </div>
                                <div class="col">
                                    <img src="asset/icon/whatsapp.svg" width="25">
                                    <span class="fs-16 cr-default">
                                        0895-7022-13410
                                    </span>
                                </div>
                                <div class="col">
                                    <img src="asset/icon/tiktok.svg" width="25">
                                    <span class="fs-16 cr-default">
                                        @undangyah
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center p-4 mt-4 cr-default fs-16">
                    Copyright © 2022 Undang Yah All Right Reserved
                </div>
            </div>
        </div>
    </section>
    <section>
        <a href="https://linktr.ee/wh.store">
            <label for="click" class="label-box">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-whatsapp icon-chatbox" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
            </label>
        </a>
    </section>
</body>

</html>

@endsection

