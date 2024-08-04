@extends('layouts.user')


@section('content')
<div class="container">
    <h1 class="my-4">Komputers</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($komputers as $komputer)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><strong>Merk:</strong> {{ ucfirst($komputer->merk) }}</p>
                    <p class="card-text"><strong>Kelengkapan:</strong> {{ $komputer->kelengkapan }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $komputers->links() }}
    </div>
</div>
@endsection