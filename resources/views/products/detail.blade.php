@extends('layouts.app')

@section('title', 'Product Detail')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/products/detail.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="product">
            <div>
                {{-- always has default image now --}}
                {{-- @if (isset($product->image_url)) 
                    <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}"
                        class="attribute-image">
                @else
                    @php
                        $randomNumber = rand(1, 6);
                    @endphp
                    <img src="{{ asset('images/filler-image-' . $randomNumber . '.png') }}" alt="Filler Image"
                        class="attribute-image">
                @endif --}}
                <img src="{{ asset($product->thumbnail) }}" alt="{{ $product->name }}" class="attribute-image">
            </div>
            <div>
                <h2>Name: {{ $product->name }}</h2>
            </div>
            <div>
                <p>Description: {{ $product->description }}</p>
            </div>
            @if ($product->productAttributes->count() > 0)
                <p>Attributes:</p>
                <div class="attributes-container">
                    @foreach ($product->productAttributes as $attribute)
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
            <div class="navigation-buttons">
                <a href="{{ $previousUrl }}" class="back-button">Go Back</a>
                <a href="{{ $previousUrl }}" class="cart-button">Add To Cart</a>
                <form action="/cart/add" method="POST">
                    @csrf
                    <input type="number" hidden name="product_id" value="{{ $product->id }}">
                </form>
            </div>
        </div>
    </div>

@endsection
