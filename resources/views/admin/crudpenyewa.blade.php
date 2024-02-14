@extends('admin.masteradmin')

@section('content')
    <h1 class="h3 mb-5 text-gray-800">Data Penyewa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertPenyewa">
                <button class="btn btn-success">Tambah +</button>
            </a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Penyewa</th>
                            <th>ID User</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyewa as $penyewa)
                            <tr>
                                <td>{{ $penyewa->id_penyewa }}</td>
                                <td>{{ $penyewa->id_user }}</td>
                                <td>{{ $penyewa->nik }}</td>
                                <td>{{ $penyewa->nama }}</td>
                                <td>{{ $penyewa->email }}</td>
                                <td>{{ $penyewa->no_hp }}</td>
                                <td>{{ $penyewa->alamat }}</td>
                                <td>{{ $penyewa->jenis_kelamin }}</td>
                                <td>
                                    <a href="/editPenyewa/{{ $penyewa->id_penyewa }}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDeletePenyewa({{ $penyewa->id_penyewa }})">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
