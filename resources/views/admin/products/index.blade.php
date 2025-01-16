@extends('layouts.app');

@section('content')

<div class="row">
    {{-- @foreach ($products as $product); --}}
        <div class="col-md-4">
            <div class="card">
                {{-- <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"> --}}
                <div class="card-body">
                    <h5 class="card-title">Product</h5>
                    <p class="card-text">Hello World</p>
                    <p class="card-text">$1000</p>
                    <a href="{{ route('products.show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View Details</a>
                </div>
            </div>
        </div>
    {{-- @endforeach --}}
</div>

@endsection
