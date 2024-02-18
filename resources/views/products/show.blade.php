@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body">
                        <p><strong>Price:</strong> ${{ $product->price }}</p>
                        <p><strong>Color:</strong> {{ $product->color }}</p>
                        <p><strong>Description:</strong> {{ $product->description }}</p>
                        <p><strong>Size:</strong> {{ $product->size }}</p>
                        <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
                        <p><strong>Availability:</strong> {{ $product->availability }}</p>
                        <p><strong>Manufacturer:</strong> {{ $product->manufacturer }}</p>
                        <p><strong>Category:</strong> {{ $product->category }}</p>
                        <p><strong>Model Number:</strong> {{ $product->model_number }}</p>
                        <p><strong>Barcode:</strong> {{ $product->barcode }}</p>
                        <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
