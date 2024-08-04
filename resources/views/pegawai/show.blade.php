@extends('layouts.app')

@section('title', 'Pegawai Details')

@section('content')
<div class="container">
    <h1 class="my-4">Pegawai Details</h1>
    <div class="form-group">
        <label for="nama_pegawai">Nama Pegawai</label>
        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" readonly>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" readonly>{{ $pegawai->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}" readonly>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ ucfirst($pegawai->jabatan) }}" readonly>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ ucfirst($pegawai->status) }}" readonly>
    </div>
    <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection