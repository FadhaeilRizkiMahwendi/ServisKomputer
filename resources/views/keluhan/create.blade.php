@extends('layouts.app')

@section('title', 'Create Keluhan')

@section('content')
<div class="container">
    <h1 class="my-4">Create Keluhan</h1>
    <form action="{{ route('keluhan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_keluhan">Nama Keluhan</label>
            <textarea class="form-control" id="nama_keluhan" name="nama_keluhan" required></textarea>
        </div>
        <div class="form-group">
            <label for="ongkos">Ongkos</label>
            <input type="number" class="form-control" id="ongkos" name="ongkos" required>
        </div>
        <div class="form-group">
            <label for="id_komputer">Komputer</label>
            <select class="form-control" id="id_komputer" name="id_komputer">
                <option value="">Select Komputer</option>
                @foreach($komputers as $komputer)
                    <option value="{{ $komputer->id }}">{{ $komputer->merk }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_customer">Customer</label>
            <select class="form-control" id="id_customer" name="id_customer">
                <option value="">Select Customer</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->nama_customer }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_pegawai">Pegawai</label>
            <select class="form-control" id="id_pegawai" name="id_pegawai">
                <option value="">Select Pegawai</option>
                @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
