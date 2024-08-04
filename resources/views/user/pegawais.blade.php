@extends('layouts.user')


@section('content')
<div class="container">
    <h1 class="my-4">Pegawais</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($pegawais as $pegawai)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">ID: {{ $pegawai->id }}</h5>
                    <p class="card-text"><strong>Nama Pegawai:</strong> {{ $pegawai->nama_pegawai }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>
                    <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $pegawai->jenis_kelamin }}</p>
                    <p class="card-text"><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
                    <p class="card-text"><strong>Status:</strong> {{ $pegawai->status }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $pegawais->links() }}
    </div>
</div>
@endsection