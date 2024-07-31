@extends('layouts.app')

@section('title', 'All Products')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/products/index.css') }}">
@endpush

@section('content')
    <div class="container">
        <h1 class="my-4">All Products</h1>
        <div class="product-grid">
            @foreach ($products as $product)
                <div class="product">
                    <div>
                        {{-- @if (isset($product->image_url))
                        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}"
                            class="attribute-image">
                    @else
                        @php
                            $randomNumber = rand(1, 6);
                        @endphp
                        <img src="{{ asset('images/filler-image-'.$randomNumber.'.png') }}" alt="Filler Image" class="attribute-image">
                    @endif --}}
                        {{-- always has default filler image --}}
                        <img src="{{ asset("$product->thumbnail") }}" alt="{{ $product->name }}" class="attribute-image">
                        <h2>Name: {{ $product->name }}</h2>
                        <p>Description: {{ $product->description }}</p>
                        @if ($product->productAttributes->count() > 0)
                            <p>Attributes:</p>
                            <div class="attributes-container">
                                @foreach ($product->productAttributes->take(5) as $attribute)
                                    <div class="attribute">
                                        <div>
                                            <strong>{{ $attribute->attribute_name }}</strong>
                                        </div>
                                        <div>
                                            {{ $attribute->attribute_value }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="product-detail">
                        <a href="product/{{ $product->id }}" class="button">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
@endsection
