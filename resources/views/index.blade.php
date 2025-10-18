@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold text-primary">
                    <i class="fas fa-birthday-cake me-3"></i>Welcome to Po Bakery
                </h1>
                <p class="lead text-muted">Fresh baked goods made daily with love and the finest ingredients</p>
            </div>
        </div>

        <div class="mb-4 text-center">
            <h2 class="h3 fw-bold">Our Top Products</h2>
        </div>


        <div class="row g-4">
            @foreach ($featuredProducts as $product)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary mb-2 align-self-start">{{ $product->category->name }}</span>
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text flex-grow-1">{{ $product->short_description }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="h5 mb-0 text-success">Rp
                                    {{ number_format($product->price, 0, ',', '.') }}</span>
                                <a href="/products/{{ $product->id }}" class="btn btn-primary">
                                    <i class="fas fa-eye me-1"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="/products" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-shopping-bag me-2"></i>View All Products
                </a>
            </div>
        </div>
    </div>
@endsection
