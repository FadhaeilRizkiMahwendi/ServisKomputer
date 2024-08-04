@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="my-4">Customers</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        @foreach($customers as $customer)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><strong>Nama Customer:</strong> {{ $customer->nama_customer }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $customer->alamat }}</p>
                    <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $customers->links() }}
    </div>
</div>
@endsection