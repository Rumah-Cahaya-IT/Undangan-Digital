@extends('layouts.dashboard')

@section('title', 'Users')

@section('content')
<div class="page-heading">
    <section class="section">
        <div class="card">
            {{-- @include('layouts.partials.alert') --}}
            <div class="card-header d-flex align-items-center justify-content-between">
                <h3>Management Akun</h3>
            </div>
            <div class="table-responsive px-4 pb-4">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role Level</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                    @if($user->level == '1')
                                    <span class="badge bg-danger">Admin</span>
                                    @elseif($user->level  == '2')
                                        <span class="badge bg-success">Member</span>
                                    @elseif($user->level  == '3')
                                        <span class="badge bg-info">Vendor</span>
                                    @endif
                            </td>
                            {{-- <td class="d-flex align-items-center">
                                <div class="dropdown">
                                    <a class="dropdown-toggle me-1" title="edit akun" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-pen-fill"></i>
                                    </a>
                                </div>
                                <form method="POST" action="{{ route('management-akun.destroy', $user->id) }}">
                                    @csrf
                                    @method('delete')
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="p-1 border-0 show_confirm" style="background: transparent; color: #435ebe;" data-toggle="tooltip" title='hapus akun'><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
<script>
    $('tbody #update-user').click(function() {
        url = $(this).data('url')
        status = $(this).text()

        $.ajax({
            method: 'PUT',
            dataType: 'json',
            url: url,
            data: {
                status: status,
                _token: "{{ csrf_token() }}",
            },
            success: function(res) {
                if(res.status) {
                    location.reload()
                }
            }
        })
    })
</script>
@endpush
