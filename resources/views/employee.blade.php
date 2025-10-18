@extends('layout.mainlayout')

@section('title', 'Employee')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold">This is Our Employee</h1>
                <p class="text-muted">Meet the talented people behind our delicious baked goods</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($employees as $employee)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 text-center shadow-sm">
                        <div class="card-body py-4">
                            <div class="mb-4">
                                <img src="{{ $employee->image }}" alt="{{ $employee->name }}"
                                    class="rounded-circle shadow border-3 border-light"
                                    style="width: 130px; height: 130px; object-fit: cover;">
                            </div>
                            <h5 class="card-title mb-2 fw-bold">{{ $employee->name }}</h5>
                            <p class="text-primary fw-semibold mb-3">{{ $employee->position }}</p>
                            <p class="text-muted small mb-0">Dedicated to creating the perfect baked goods for our customers
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
