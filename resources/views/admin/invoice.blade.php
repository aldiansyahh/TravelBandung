@extends('admin.masteradmin') <!-- Jika Anda menggunakan layout -->

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-5 text-gray-800">Invoice</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/insertInvoice">
                <p class="btn btn-success ">Tambah +</p><br>
            </a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                {{$message}}
                </div>
        @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Sewa</th>
                            <th>ID Kendaraan</th>
                            <th>ID Pelanggan</th>
                            <th>ID Tujuan</th>
                            <th>Nama kendaraan</th>
                            <th>No Plat</th>
                            <th>Tanggal</th>
                            <th>Harga Sewa</th>
                            <th>Status</th> <!-- Perbaikan pada nama kolom -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sewa as $sewa) <!-- Mengganti nama variabel untuk menghindari konflik -->
                            <tr>
                                <td>{{ $sewa->id_sewa }}</td>
                                <td>{{ $sewa->id_kendaraan }}</td>
                                <td>{{ $sewa->id_pelanggan }}</td>
                                <td>{{ $sewa->id_tujuan }}</td>
                                <td>{{ $sewa->nama_kendaraan }}</td>
                                <td>{{ $sewa->nomor_plat }}</td>
                                <td>{{ $sewa->tanggal }}</td>
                                <td>{{ $sewa->harga_sewa }}</td>
                                <td>{{ $sewa->status }}</td>
                                <td>
                                    <a href="/editInvoice/{{ $sewa->id_sewa }}" class="btn btn-warning">Ubah</a>
                                    <a href="#" class="btn btn-danger" onclick="confirmDeleteInvoice({{ $sewa->id_sewa }})">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
