@extends('layouts.app')

@section('title', 'Komputer List')

@section('content')
<div class="container">
    <h1 class="my-4">Komputers</h1>
    <a href="{{ route('komputer.create') }}" class="btn btn-primary mb-3">Add New Komputer</a>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Kelengkapan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($komputers as $komputer)
            <tr>
                <td>{{ $komputer->id }}</td>
                <td>{{ ucfirst($komputer->merk) }}</td>
                <td>{{ $komputer->kelengkapan }}</td>
                <td>
                    <a href="{{ route('komputer.show', $komputer->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('komputer.edit', $komputer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('komputer.destroy', $komputer->id) }}" method="POST" style="display:inline-block;">
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