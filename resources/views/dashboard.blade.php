@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="my-4">Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Customers</h5>
                    <p class="card-text">View customer details.</p>
                    <a href="{{ route('customers') }}" class="btn btn-light">View Customers</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Barang</h5>
                    <p class="card-text">View barang details.</p>
                    <a href="{{ route('barangs') }}" class="btn btn-light">View Barang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Keluhan</h5>
                    <p class="card-text">View keluhan details.</p>
                    <a href="{{ route('keluhans') }}" class="btn btn-light">View Keluhan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Komputer</h5>
                    <p class="card-text">View komputer details.</p>
                    <a href="{{ route('komputers') }}" class="btn btn-light">View Komputer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Pegawai</h5>
                    <p class="card-text">View pegawai details.</p>
                    <a href="{{ route('pegawais') }}" class="btn btn-light">View Pegawai</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-info mb-4 card-equal-height">
                <div class="card-body">
                    <h5 class="card-title">Suppliers</h5>
                    <p class="card-text">View supplier details.</p>
                    <a href="{{ route('suppliers') }}" class="btn btn-light">View Suppliers</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection