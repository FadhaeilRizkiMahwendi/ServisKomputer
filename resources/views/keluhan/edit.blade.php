@extends('layouts.app')

@section('title', 'Edit Keluhan')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Keluhan</h1>
    <form action="{{ route('keluhan.update', $keluhan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_keluhan">Nama Keluhan</label>
            <textarea class="form-control" id="nama_keluhan" name="nama_keluhan" required>{{ $keluhan->nama_keluhan }}</textarea>
        </div>
        <div class="form-group">
            <label for="ongkos">Ongkos</label>
            <input type="number" class="form-control" id="ongkos" name="ongkos" value="{{ $keluhan->ongkos }}" required>
        </div>
        <div class="form-group">
            <label for="id_komputer">Komputer</label>
            <select class="form-control" id="id_komputer" name="id_komputer">
                <option value="">Select Komputer</option>
                @foreach($komputers as $komputer)
                <option value="{{ $komputer->id }}" {{ $keluhan->id_komputer == $komputer->id ? 'selected' : '' }}>{{ $komputer->merk }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_customer">Customer</label>
            <select class="form-control" id="id_customer" name="id_customer">
                <option value="">Select Customer</option>
                @foreach($customers as $customer)
                <option value="{{ $customer->id }}" {{ $keluhan->id_customer == $customer->id ? 'selected' : '' }}>{{ $customer->nama_customer }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_pegawai">Pegawai</label>
            <select class="form-control" id="id_pegawai" name="id_pegawai">
                <option value="">Select Pegawai</option>
                @foreach($pegawais as $pegawai)
                <option value="{{ $pegawai->id }}" {{ $keluhan->id_pegawai == $pegawai->id ? 'selected' : '' }}>{{ $pegawai->nama_pegawai }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection