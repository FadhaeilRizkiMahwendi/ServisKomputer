@extends('layouts.app')

@section('title', 'Barang Details')

@section('content')
<div class="container">
    <h1>Barang Details</h1>
    <div class="form-group">
        <label for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" readonly>
    </div>
    <div class="form-group">
        <label for="merk">Merk</label>
        <input type="text" class="form-control" id="merk" name="merk" value="{{ $barang->merk }}" readonly>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" readonly>
    </div>
    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" readonly>
    </div>
    <div class="form-group">
        <label for="satuan">Satuan</label>
        <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $barang->satuan }}" readonly>
    </div>
    <a href="{{ route('barang.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection