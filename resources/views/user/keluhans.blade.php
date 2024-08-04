@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="my-4">Keluhan</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($keluhans as $keluhan)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><strong>Nama Keluhan:</strong> {{ $keluhan->nama_keluhan }}</p>
                    <p class="card-text"><strong>Ongkos:</strong> {{ $keluhan->ongkos }}</p>
                    <p class="card-text"><strong>Komputer:</strong> {{ optional($keluhan->komputer)->merk }}</p>
                    <p class="card-text"><strong>Customer:</strong> {{ optional($keluhan->customer)->nama_customer }}</p>
                    <p class="card-text"><strong>Pegawai:</strong> {{ optional($keluhan->pegawai)->nama_pegawai }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $keluhans->links() }}
    </div>
</div>
@endsection