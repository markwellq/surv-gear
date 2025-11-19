@extends('layout')

@section('main')
    <section class="mx-auto">
        
        <div class="relative">
            <img src="{{ asset('storage/images/hero.webp') }}" alt="hero"
                 class="w-full object-cover h-[700px] brightness-50 opacity-90">

            <div class="absolute inset-0 flex flex-col items-center justify-center text-center gap-10 px-4">
                <h1 class="text-[32px] md:text-[42px] text-(--font-color-white) lg:text-[64px] font-bold select-none">Official Bear Grylls Gear</h1>
                <h2 class="text-[16px] md:text-[28px] text-(--font-color-white) font-semibold select-none">Adventure & Survival Gear to Help You Get Outside</h2>

                
                 <a href="/gear" class="py-3 px-7 bg-(--button-color) hover:bg-white hover:text-black font-bold rounded-lg select-none duration-100">
                      Shop All Gear
                  </a>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center p-2 bg-(--product-color) py-10">
             <div class="flex flex-col justify-center items-center mb-10">
                <h3 class="text-[18px] md:text-[24px] lg:text-[28px] font-bold text-(--text-white)">Discount Lorem. %</h3>
                <p class="text-[16px] md:text-[22px] lg:text-[26px] text-(--text-white)">Lorem ipsum</p>
             </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-15 sm:gap-10 p-4">
                @foreach($products as $product)
                    <a href="{{ route('show-product', $product->slug) }}">
                       <div class="flex flex-col gap-3">
                           <div class="overflow-hidden">
                               <div class="aspect-square object-cover h-full w-45 md:w-50 lg:w-64 xl:w-74 overflow-hidden">
                                   <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full hover:scale-103 duration-300">
                               </div>
                           </div>
                           <div class="flex flex-col gap-2 py-2 px-4 bg-(--product-color-2)">
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
                               </div>
                               <h3 class="text-(--text-white) font-bold text-[14px] sm:text-[15px] lg:text-[18px]">{{ $product->name }}</h3>
                               <div class="flex flex-row gap-3">
                                   <p style="text-decoration: line-through" class="text-(--text-white)">{{ $product->price }}$</p>
                                   <p class="text-(--text-white)">{{ $product->discount_price }}$</p>
                               </div>
                           </div>
                       </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="flex flex-col items-center justify-center gap-6 p-4 py-20 bg-white">

            <h2 class="text-[24px] md:text-[32px] font-bold">Built for the Wild. Trusted by the Best.</h2>
            <p class="text-[18px]">Partners who share our spirit of adventure.</p>

            <div class="flex flex-row gap-10 py-4">
                <div class="w-25 h-20 md:w-45 md:h-25 flex items-center justify-center">
                    <img src="{{ asset('storage/images/sponsors/sponsor-1.png') }}" alt="sponsor-1"
                    class="object-contain w-full h-full opacity-90 hover:opacity-100 hover:scale-105 transition-scale duration-350">
                </div>
                <div class="w-25 h-20 md:w-45 md:h-25 flex items-center justify-center">
                    <img src="{{ asset('storage/images/sponsors/sponsor-2.svg') }}" alt="sponsor-2"
                    class="object-contain w-full h-full opacity-90 hover:opacity-100 hover:scale-105 transition-scale duration-350">
                </div>
                <div class="w-20 h-20 md:w-45 md:h-25 flex items-center justify-center">
                    <img src="{{ asset('storage/images/sponsors/sponsor-3.svg') }}" alt="sponsor-3"
                    class="object-contain w-full h-full opacity-90 hover:opacity-100 hover:scale-105 transition-scale duration-350">
                </div>
                <div class="w-20 h-20 md:w-45 md:h-25 flex items-center justify-center">
                    <img src="{{ asset('storage/images/sponsors/sponsor-4.svg') }}" alt="sponsor-4"
                    class="object-contain w-full h-full opacity-90 hover:opacity-100 hover:scale-105 transition-scale duration-350">
                </div>
            </div>
        </div>
    </section>
@endsection