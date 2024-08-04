@extends('layouts.app')

@section('title', 'Edit Komputer')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Komputer</h1>
    <form action="{{ route('komputer.update', $komputer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="merk">Merk</label>
            <select class="form-control" id="merk" name="merk" required>
                <option value="asus" {{ $komputer->merk == 'asus' ? 'selected' : '' }}>Asus</option>
                <option value="acer" {{ $komputer->merk == 'acer' ? 'selected' : '' }}>Acer</option>
                <option value="dell" {{ $komputer->merk == 'dell' ? 'selected' : '' }}>Dell</option>
                <option value="lenovo" {{ $komputer->merk == 'lenovo' ? 'selected' : '' }}>Lenovo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="kelengkapan">Kelengkapan</label>
            <textarea class="form-control" id="kelengkapan" name="kelengkapan" required>{{ $komputer->kelengkapan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection