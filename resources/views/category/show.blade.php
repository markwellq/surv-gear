@extends('layout')
@section('main')
<h1>{{ $category->name }}</h1>

    <ul>
        @foreach($category->products as $product)
            <li>
                <a href="{{ route('show-product', $product->slug) }}">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-[200px]">
                </a>
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p>price: {{ $product->price }}$</p>
                <p>Show products</p>
            </li>

        @endforeach
    </ul>
@endsection

