@extends('layouts.app')

@section('title', 'All Products')

@push('styles')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-info h5 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .product-info p {
            margin: 0;
            color: #666;
        }

        .product-footer {
            padding: 15px;
            text-align: center;
            background-color: #f8f8f8;
        }

        .product-footer .view-details {
            color: #007bff;
            text-decoration: none;
        }

        .product-footer .view-details:hover {
            text-decoration: underline;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .pagination .page-link {
            color: #007bff;
            text-decoration: none;
            padding: 10px 15px;
            border: 1px solid #ddd;
            margin: 0 5px;
            border-radius: 5px;
        }

        .pagination .page-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .product {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
        }

        .attributes-container {
            display: flex;
            flex-direction: column;
            align-content: space-between;
            flex-wrap: nowrap;
            /* Optional: allows wrapping to the next line if needed */
            gap: 1rem;
            /* Optional: adjusts spacing between items */
        }

        .attribute {
            background-color: #f8f9fa;
            /* Optional: background color for better visibility */
            padding: 0.5rem;
            /* Optional: spacing inside each attribute div */
            border: 1px solid #ddd;
            /* Optional: border around each attribute div */
            border-radius: 4px;
            /* Optional: rounded corners */
            display: flex;
            justify-content: space-between;
        }

        .attribute-image {
            width:100%;
            height: auto;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <h1 class="my-4">All Products</h1>
        <div class="product-grid">
            @foreach ($products as $product)
                <div class="product">
                    @if (isset($product->image_url))
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}"
                            class="attribute-image">
                    @else
                        <img src="{{ asset('images/filler-image.png') }}" alt="Filler Image" class="attribute-image">
                    @endif
                    <h2>Name: {{ $product->name }}</h2>
                    <p>Description: {{ $product->description }}</p>
                    @if ($product->productAttributes->count() > 0)
                        <p>Attributes:</p>
                        <div class="attributes-container">
                            @foreach ($product->productAttributes->take(5) as $attribute)
                                <div class="attribute">
                                    <div>
                                        <strong>{{ $attribute->attribute_name }}:</strong>
                                    </div>
                                    <div>
                                        {{ $attribute->attribute_value }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
@endsection
