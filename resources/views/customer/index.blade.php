@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
<div class="container">
    <h1 class="my-4">Customers</h1>
    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">Add New Customer</a>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Customer</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->nama_customer }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>
                    <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection