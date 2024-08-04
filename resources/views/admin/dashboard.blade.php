@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Customers</h5>
                    <p class="card-text">Manage customer information and view customer details.</p>
                    <a href="{{ route('customer.index') }}" class="btn btn-light">Go to Customers</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Barang</h5>
                    <p class="card-text">Manage barang komputer information and view barang details.</p>
                    <a href="{{ route('barang.index') }}" class="btn btn-light">Go to Barang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Keluhan</h5>
                    <p class="card-text">Manage keluhan information and view keluhan details.</p>
                    <a href="{{ route('keluhan.index') }}" class="btn btn-light">Go to Keluhan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Komputer</h5>
                    <p class="card-text">Manage komputer information and view komputer details.</p>
                    <a href="{{ route('komputer.index') }}" class="btn btn-light">Go to Komputer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Pegawai</h5>
                    <p class="card-text">Manage pegawai information and view pegawai details.</p>
                    <a href="{{ route('pegawai.index') }}" class="btn btn-light">Go to Pegawai</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Suppliers</h5>
                    <p class="card-text">Manage supplier information and view supplier details.</p>
                    <a href="{{ route('supplier.index') }}" class="btn btn-light">Go to Suppliers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection