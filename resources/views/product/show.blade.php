@extends('layout')

@section('main')
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>price: {{ $product->price }}$</p>
<img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-[200px]">
<p>Show products</p>
@endsection