@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="my-4">List of Suppliers</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($suppliers as $supplier)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><strong>Nama Supplier:</strong> {{ $supplier->nama_supplier }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $supplier->alamat }}</p>
                    <p class="card-text"><strong>No HP:</strong> {{ $supplier->no_hp }}</p>
                    <p class="card-text"><strong>Barang:</strong> {{ $supplier->barang->nama_barang ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $suppliers->links() }}
    </div>
</div>
@endsection