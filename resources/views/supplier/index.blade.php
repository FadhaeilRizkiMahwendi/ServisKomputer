@extends('layouts.app')

@section('title', 'List of Suppliers')

@section('content')
<div class="container">
    <h1>List of Suppliers</h1>
    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">Add New Supplier</a>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Barang</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->id }}</td>
                <td>{{ $supplier->nama_supplier }}</td>
                <td>{{ $supplier->alamat }}</td>
                <td>{{ $supplier->no_hp }}</td>
                <td>{{ $supplier->barang->nama_barang ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" style="display:inline-block;">
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