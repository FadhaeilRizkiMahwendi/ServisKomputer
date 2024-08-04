@extends('layouts.app')

@section('title', 'List of Barang')

@section('content')
<div class="container">
    <h1>List of Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Add New Barang</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->satuan }}</td>
                    <td>
                        <a href="{{ route('barang.show', $item->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
