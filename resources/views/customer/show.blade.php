@extends('layouts.app')

@section('title', 'Customer Details')

@section('content')
<div class="container">
    <h1 class="my-4">Customer Details</h1>
    <div class="form-group">
        <label for="nama_customer">Nama Customer</label>
        <input type="text" class="form-control" id="nama_customer" name="nama_customer" value="{{ $customer->nama_customer }}" readonly>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" readonly>{{ $customer->alamat }}</textarea>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}" readonly>
    </div>
    <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection