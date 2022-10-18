@extends('layouts.dashboard')

@section('title', 'Penawaran Clien')

@section('content')
<div class="container">
    <section class="list-group-button-badge">
                    <div class="row match-height">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Perusahaan{{ $penawaran->prusahaan }}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="list-group">
                                            <button type="button"
                                                class="list-group-item list-group-item-action active">Nama : {{ $penawaran->name }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">Nama : {{ $penawaran->no_hp }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">Email : {{ $penawaran->email }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">Judul Proyek : {{ $penawaran->judul_proyek }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">Deskripsi : {{ $penawaran->deskripsi }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">Badget : {{ $penawaran->bedget }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">Level : {{ $penawaran->level }}</button>
                                            <button type="button" class="list-group-item list-group-item-action">File : {{ $penawaran->file }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
</div>
@endsection
