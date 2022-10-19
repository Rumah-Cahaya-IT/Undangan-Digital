@extends('layouts.dashboard')

@section('title', 'Edit Penawaran')

@section('content')

<div class="page-heading">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ isset($penawaran) ? 'Update Pekerjaan' : 'Tambah' }}</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form"
                                action="{{ isset($penawaran) ? route('penawarans_put.update', $penawaran->id) : route('penawaran.store') }}"
                                method="post">
                                @csrf
                                @isset($penawaran)
                                @method('put')
                                @endisset
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" id="name" class="form-control" name="name" required
                                                value="{{ isset($penawaran) ? $penawaran->name : '' }}" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="prusahaan">Perusahaan</label>
                                            <input type="prusahaan" id="prusahaan" class="form-control" name="prusahaan"
                                                value="{{ isset($penawaran) ? $penawaran->prusahaan : '' }}" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" class="form-control" name="email" required
                                                value="{{ isset($penawaran) ? $penawaran->email : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">Telephone</label>
                                            <input type="text" id="no_hp" class="form-control" name="no_hp" required
                                                value="{{ isset($penawaran) ? $penawaran->email : '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="judul_proyek">Judul Proyek</label>
                                            <input type="text" id="judul_proyek" class="form-control" name="judul_proyek" required
                                                value="{{ isset($penawaran) ? $penawaran->judul_proyek : '' }}">
                                        </div>
                                        <div class="col-md-9 mt-2 mb-4">
                                            <label for="deskripsi">Keterangan</label>
                                            <textarea name="deskripsi" id="deskripsi"
                                                required>{!! isset($penawaran) ? $penawaran->deskripsi : '' !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="bedget">Bedget</label>
                                            <input type="text" id="bedget" class="form-control" name="bedget" required
                                                value="{{ isset($penawaran) ? $penawaran->bedget : '' }}">
                                        </div>
{{--
                                        <div class="form-group">
                                            <label for="type_job_id">Tipe Pekerjaan</label>
                                            <select name="type_job_id" id="type_job_id" class="form-control">
                                                @foreach($type_jobs as $id => $name)
                                                <option value="{{ $id }}" @isset($job) @if($id==$job->type_job->id)
                                                    selected @endif @endisset>{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="company">Perusahaan</label>
                                            <select name="company_id" id="company" class="form-control">
                                                @foreach($companies as $id => $name)
                                                <option value="{{ $id }}" @isset($job) @if($id==$job->company->id)
                                                    selected @endif @endisset>{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                    </div>

                                    <div class="col-12 d-flex justify-content-start">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
