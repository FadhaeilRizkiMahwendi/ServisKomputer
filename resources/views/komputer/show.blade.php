@extends('layouts.app')

@section('title', 'Komputer Details')

@section('content')
<div class="container">
    <h1 class="my-4">Komputer Details</h1>
    <div class="form-group">
        <label for="merk">Merk</label>
        <input type="text" class="form-control" id="merk" name="merk" value="{{ ucfirst($komputer->merk) }}" readonly>
    </div>
    <div class="form-group">
        <label for="kelengkapan">Kelengkapan</label>
        <textarea class="form-control" id="kelengkapan" name="kelengkapan" readonly>{{ $komputer->kelengkapan }}</textarea>
    </div>
    <a href="{{ route('komputer.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection