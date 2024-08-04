@extends('layouts.app')

@section('title', 'Pegawai List')

@section('content')
<div class="container">
    <h1 class="my-4">Pegawais</h1>
    <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Add New Pegawai</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawais as $pegawai)
            <tr>
                <td>{{ $pegawai->id }}</td>
                <td>{{ $pegawai->nama_pegawai }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>{{ $pegawai->status }}</td>
                <td>
                    <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
