@extends('layouts.app')

@section('title', 'Create Komputer')

@section('content')
<div class="container">
    <h1 class="my-4">Create Komputer</h1>
    <form action="{{ route('komputer.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="merk">Merk</label>
            <select class="form-control" id="merk" name="merk" required>
                <option value="asus">Asus</option>
                <option value="acer">Acer</option>
                <option value="dell">Dell</option>
                <option value="lenovo">Lenovo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="kelengkapan">Kelengkapan</label>
            <textarea class="form-control" id="kelengkapan" name="kelengkapan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection