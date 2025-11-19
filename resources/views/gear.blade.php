@extends('layout')

@section('main')
    <div class="bg-(--product-color)">
        <div class="mx-auto">

            <div class="flex flex-row items-center justify-between mt-10 mb-10 container mx-auto px-10">
                <div>
                    <p class="text-(--text-white)">Filters</p>
                </div>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            
                <div>
                  <p class="text-[14px] md:text-[16px] lg:text-[18px] text-(--text-white)">
                     {{ $total }} products
                  </p> 
                </div>
            </div>

            <div>
                @livewire('products')
            </div>
        </div>
    </div>
@endsection