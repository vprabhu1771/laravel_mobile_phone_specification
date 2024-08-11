@extends('frontend.layout.app')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

<style>
    .product-image {
        max-height: 500px;
        object-fit: cover;
    }
    .product-details {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
    }
    .specifications-table, .features-table {
        margin-top: 20px;
    }
</style>

<div class="container my-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-6">
            <img src="{{ $product->GetImagePath() }}" alt="{{ $product->name }}" class="img-fluid product-image">
        </div>
        
        <!-- Product Details -->
        <div class="col-md-6">
            <h1 class="mb-3">{{ $product->name }}</h1>
            <p class="lead">{{ $product->description }}</p>
            <h4 class="text-success mb-3">${{ number_format($product->price, 2) }}</h4>

            <p><strong>Category:</strong> {{ $product->category->name }}</p>
            <p><strong>Brand:</strong> {{ $product->brand->name }}</p>

            <!-- Specifications Table -->
            <h5 class="mt-4">Specifications</h5>
            <table class="table table-bordered specifications-table">
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product->specifications as $spec)
                        <tr>
                            <td>{{ $spec->key }}</td>
                            <td>{{ $spec->value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Features Table -->
            <h5 class="mt-4">Features</h5>
            <table class="table table-bordered features-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product->features as $feature)
                        <tr>
                            <td>{{ $feature->feature }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Price Comparison Table -->
            <h5 class="mt-4">Price Comparison</h5>
            <table class="table table-bordered price-comparison-table">
                <thead>
                    <tr>
                        <th>Retailer</th>
                        <th>Price</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $hasPrice = false;
                    @endphp
                    @if($product->amazon_price)
                        <tr>
                            <td>Amazon</td>
                            <td>${{ number_format($product->amazon_price, 2) }}</td>
                            <td><a href="{{ $product->amazon_url }}" target="_blank" class="btn btn-info btn-sm">View on Amazon</a></td>
                        </tr>
                        @php
                            $hasPrice = true;
                        @endphp
                    @endif
                    @if($product->ifixit_price)
                        <tr>
                            <td>iFixit</td>
                            <td>${{ number_format($product->ifixit_price, 2) }}</td>
                            <td><a href="{{ $product->ifixit_url }}" target="_blank" class="btn btn-info btn-sm">View on iFixit</a></td>
                        </tr>
                        @php
                            $hasPrice = true;
                        @endphp
                    @endif

                    @if(!$hasPrice)
                        <tr>
                            <td colspan="3" class="text-center">No Data Available</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
