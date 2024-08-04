@extends('layouts.app')

@section('title', 'Keluhan Details')

@section('content')
<div class="container">
    <h1 class="my-4">Keluhan Details</h1>
    <div class="form-group">
        <label for="nama_keluhan">Nama Keluhan</label>
        <textarea class="form-control" id="nama_keluhan" name="nama_keluhan" readonly>{{ $keluhan->nama_keluhan }}</textarea>
    </div>
    <div class="form-group">
        <label for="ongkos">Ongkos</label>
        <input type="number" class="form-control" id="ongkos" name="ongkos" value="{{ $keluhan->ongkos }}" readonly>
    </div>
    <div class="form-group">
        <label for="id_komputer">Komputer</label>
        <input type="text" class="form-control" id="id_komputer" name="id_komputer" value="{{ optional($keluhan->komputer)->merk }}" readonly>
    </div>
    <div class="form-group">
        <label for="id_customer">Customer</label>
        <input type="text" class="form-control" id="id_customer" name="id_customer" value="{{ optional($keluhan->customer)->nama_customer }}" readonly>
    </div>
    <div class="form-group">
        <label for="id_pegawai">Pegawai</label>
        <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ optional($keluhan->pegawai)->nama_pegawai }}" readonly>
    </div>
    <a href="{{ route('keluhan.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection