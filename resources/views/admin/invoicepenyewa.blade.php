@extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Data Nota Penyewa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
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
                            <th>ID Kendaran</th>
                            <th>ID Penyewa</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraan as $kendaraan)
                            <tr>
                                <td>{{ $kendaraan->id_kendaraan }}</td>
                                <td>{{ $kendaraan->id_penyewa }}</td>
                                <td>{{ $kendaraan->status }}</td>
                                <td>
                                    <a href="/editInvoicepenyewa/{{ $kendaraan->id_kendaraan }}" class="btn btn-warning">Ubah</a>
                                    {{-- <a href="#" class="btn btn-danger" onclick="confirmDeleteKendaraan({{ $kendaraan->id_kendaraan }})">Hapus</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
