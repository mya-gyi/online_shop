@extends('layouts.app')

@section('title', 'Home - Online Shop')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="p-5 text-center bg-light rounded-3">
                <h1>Welcome to Online Shop</h1>
                <p>Your one-stop destination for amazing products.</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-shopping-bag"></i> Start Shopping
                </a>
            </div>
        </div>
    </div>

    <!-- Featured Products Section -->
    {{-- <div class="row">
        <h2 class="mb-4">Featured Products</h2>
        @foreach($featuredProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="text-success"><strong>${{ $product->price }}</strong></p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary btn-sm">
                            View Product
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

    <!-- Categories Section -->
    {{-- <div class="row mt-5">
        <h2 class="mb-4">Shop by Categories</h2>
        @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-secondary">
                            Browse {{ $category->name }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}
</div>
@endsection
