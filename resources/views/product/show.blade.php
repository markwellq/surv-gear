@extends('layout')

@section('main')
<div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-20 bg-(--product-color) py-28">


    <div class="overflow-hidden w-full p-4 max-w-xl">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
        class="object-contain h-full lg:w-[800px]">
    </div>

    <div class="flex flex-col md:justify-center md:items-left gap-4 p-4 max-w-lg">
         <h1 class="text-(--text-white) font-bold text-[24px] md:text-[32px] lg:text-[42px]">{{ $product->name }}</h1>
         @if ($product->discount)
            <div class="flex flex-row gap-2">
                <p style="text-decoration: line-through" class="text-(--text-white) text-[24px] md:text-[28px]"> {{ $product->price }}$</p>
                <p class="text-(--text-white) text-[24px] md:text-[28px]"> {{ $product->discount_price }}$</p>

            </div>
         @else
            <p class="text-(--text-white) text-[24px] md:text-[28px]"> {{ $product->price}}$</p>
         @endif 

          <div class="flex flex-row gap-2">
                <div class="p-1 bg-(--bg-white) rounded-sm">
                    <x-heroicon-s-star class="w-3 h-3 sm:w-4 sm:h-4"/>
                </div>
                <div class="p-1 bg-(--bg-white) rounded-sm">
                    <x-heroicon-s-star class="w-3 h-3 sm:w-4 sm:h-4"/>
                </div>
                <div class="p-1 bg-(--bg-white) rounded-sm">
                    <x-heroicon-s-star class="w-3 h-3 sm:w-4 sm:h-4"/>
                </div>
                <div class="p-1 bg-(--bg-white) rounded-sm">
                    <x-heroicon-s-star class="w-3 h-3 sm:w-4 sm:h-4"/>
                </div>
                <div class="p-1 bg-(--bg-white) rounded-sm">
                    <x-heroicon-s-star class="w-3 h-3 sm:w-4 sm:h-4"/>
                </div>
                <p class="text-(--text-white)">5</p>
          </div>

          <div class="flex flex-row items-center justify-center gap-10">
            <div class="flex flex-col items-center gap-2">
                <x-gmdi-local-shipping-r class="w-10 h-10 text-(--text-white)" />
                <span class="text-(--text-white) font-bold">Fast Shipping</span>
            </div>

             <div class="flex flex-col items-center gap-2">
                <x-bi-box-fill class="w-10 h-10 text-(--text-white)" />
                <span class="text-(--text-white) font-bold">Package</span>
            </div>

             <div class="flex flex-col items-center gap-2">
                <x-antdesign-safety-certificate  class="w-10 h-10 text-(--text-white)" />
                <span class="text-(--text-white) font-bold">Surv Tested</span>
            </div>
          </div>

          <div class="flex items-center justify-center mt-2 mb-2">
            <div>
                @livewire('add-to-cart', ['productId' => $product->id])
            </div>
        </div>

                 <div class="flex flex-col gap-2 ">
                    <p class="text-(--text-white)">{{ $product->description }}</p>
                    <p class="text-(--text-white)">• {{ $product->short_desc }}</p>
                    <p class="text-(--text-white)">• {{ $product->short_desc_2 }}</p>
                </div>
    </div>
</div>
@endsection