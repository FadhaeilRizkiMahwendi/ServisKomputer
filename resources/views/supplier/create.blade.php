@extends('layouts.app')

@section('title', 'Add New Supplier')

@section('content')
<div class="container">
    <h1>Add New Supplier</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_supplier">Nama Supplier</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier') }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
        </div>
        <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
        </div>
        <div class="form-group">
            <label for="id_barang">Barang</label>
            <select class="form-control" id="id_barang" name="id_barang">
                <option value="">Select Barang</option>
                @foreach($barang as $item)
                <option value="{{ $item->id }}" {{ old('id_barang') == $item->id ? 'selected' : '' }}>{{ $item->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Supplier</button>
    </form>
</div>
@endsection