@extends('layout')

@section('main')
    <div class="bg-(--product-color) py-10">
        <div class="mx-auto mb-10">
            <div class="flex items-center justify-center max-w-1xl">
                @livewire('products')
            </div>
        </div>
    </div>
@endsection