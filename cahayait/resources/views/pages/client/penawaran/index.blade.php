@extends('layouts.dashboard')

@section('title', 'Penawaran Clien')

@section('content')

            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pengajuan Clien</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Perusahaan</th>
                                        <th>Phone</th>
                                        <th>Badget</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($penawarans as $penawaran)
                                    <tr>
                                        <td>{{ $penawaran->name }}</td>
                                        <td>{{ $penawaran->prusahaan }}</td>
                                        <td>{{ $penawaran->no_hp }}</td>
                                        <td>{{ $penawaran->bedget }}</td>
                                        <td class="p-4 d-flex align-items-center">
                                            <a href="{{ route('penawarans_edit.edit', $penawaran) }}" title="edit news"><i class="bi bi-pen-fill"></i></a>
                                            <form method="POST" action="{{ route('penawarans_delete.destroy', $penawaran->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="p-1 border-0 show_confirm" style="background: transparent; color: #435ebe;" data-toggle="tooltip" title='Delete'><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
@endsection
