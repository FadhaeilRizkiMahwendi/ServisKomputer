@extends('layouts.app')

@section('title', 'Supplier Details')

@section('content')
<div class="container">
    <h1>Supplier Details</h1>
    <div class="form-group">
        <label for="nama_supplier">Nama Supplier</label>
        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}" readonly>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" readonly>{{ $supplier->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="no_hp">No HP</label>
        <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $supplier->no_hp }}" readonly>
    </div>
    <div class="form-group">
        <label for="id_barang">Barang</label>
        <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{ $supplier->barang->nama_barang ?? 'N/A' }}" readonly>
    </div>
    <a href="{{ route('supplier.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection