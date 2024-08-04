@extends('layouts.user')

@section('title', 'List of Barang')

@section('content')
<div class="container">
    <h1 class="my-4">List of Barang</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($barang as $item)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><strong>Nama Barang:</strong> {{ $item->nama_barang }}</p>
                    <p class="card-text"><strong>Merk:</strong> {{ $item->merk }}</p>
                    <p class="card-text"><strong>Harga:</strong> {{ $item->harga }}</p>
                    <p class="card-text"><strong>Stok:</strong> {{ $item->stok }}</p>
                    <p class="card-text"><strong>Satuan:</strong> {{ $item->satuan }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $barang->links() }}
    </div>
</div>
@endsection