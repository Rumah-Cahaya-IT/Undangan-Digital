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
                                            <label for="title">Judul</label>
                                            <input type="text" id="title" class="form-control" name="title" required
                                                value="{{ isset($penawaran) ? $penawaran->name : '' }}" autocomplete="off">
                                        </div>
                                        {{-- <div class="form-group">
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
                                        </div>
                                        <div class="form-group">
                                            <label for="url">Link</label>
                                            <input type="url" id="url" class="form-control" name="url"
                                                value="{{ isset($job) ? $job->url : '' }}" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="open">Tutup Pekerjaan</label>
                                            <input type="date" id="open" class="form-control" name="open" required
                                                value="{{ isset($job) ? $job->open : '' }}">
                                        </div> --}}
                                    </div>
                                    {{-- <div class="col-md-9 mt-2 mb-4">
                                        <label for="description">Keterangan</label>
                                        <textarea name="description" id="description"
                                            required>{!! isset($job) ? $job->description : '' !!}</textarea>
                                    </div> --}}
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
