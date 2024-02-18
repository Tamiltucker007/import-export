@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Page') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <form action="{{ route('product.import') }}" method="POST" enctype="multipart/form-data" class="form-inline">
                            @csrf
                            <div class="form-group">
                                <label for="file" class="mr-2">Choose Excel file to import:</label>
                                <input type="file" class="form-control-file" id="file" name="file">
                                <button type="submit" class="btn btn-success ml-2">Import Data</button>
                            </div>
                        </form>
                    </div>                    
                    
                    <a href="{{ route('product.export') }}" class="btn btn-primary mb-3">Download Produts</a>
                    @if($products)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Color</th>
                                    <th>Description</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->color }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->availability }}</td>
                                    <td>
                                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-sm btn-info">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
