@extends('admin.masteradmin')

@section('content')
    <div class="form-group mb-3">
        <h1 class="h3 text-black-1000">Edit Data Invoice Penyewa</h1>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
    @endif

    <form action="/updateinvoicepenyewa/{{$kendaraan->id_kendaraan}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">ID Penyewa</label>
            <input type="text" name="id_penyewa" class="form-control" id="id_penyewa" aria-describedby="namaHelp" required value="{{$kendaraan->id_penyewa}}">
        </div>


        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status" aria-describedby="statusHelp" required value="{{$kendaraan->status}}">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/invoicepenyewa" class="btn btn-primary">Cancel</a>
    </form>
@endsection
