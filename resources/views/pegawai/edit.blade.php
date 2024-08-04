@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Pegawai</h1>
    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $pegawai->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $pegawai->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-control" id="jabatan" name="jabatan" required>
                <option value="teknisi" {{ $pegawai->jabatan == 'teknisi' ? 'selected' : '' }}>Teknisi</option>
                <option value="admin" {{ $pegawai->jabatan == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="spv" {{ $pegawai->jabatan == 'spv' ? 'selected' : '' }}>Supervisor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="aktif" {{ $pegawai->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="tidak_aktif" {{ $pegawai->status == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection