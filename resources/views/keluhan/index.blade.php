@extends('layouts.app')

@section('title', 'Keluhan List')

@section('content')
<div class="container">
    <h1 class="my-4">Keluhan</h1>
    <a href="{{ route('keluhan.create') }}" class="btn btn-primary mb-3">Add New Keluhan</a>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama Keluhan</th>
                <th>Ongkos</th>
                <th>Komputer</th>
                <th>Customer</th>
                <th>Pegawai</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluhans as $keluhan)
            <tr>
                <td>{{ $keluhan->id }}</td>
                <td>{{ $keluhan->nama_keluhan }}</td>
                <td>{{ $keluhan->ongkos }}</td>
                <td>{{ optional($keluhan->komputer)->merk }}</td>
                <td>{{ optional($keluhan->customer)->nama_customer }}</td>
                <td>{{ optional($keluhan->pegawai)->nama_pegawai }}</td>
                <td>
                    <a href="{{ route('keluhan.show', $keluhan->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('keluhan.edit', $keluhan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('keluhan.destroy', $keluhan->id) }}" method="POST" style="display:inline-block;">
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