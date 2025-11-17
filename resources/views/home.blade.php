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

        <div class="flex flex-col items-center justify-center p-2 bg-(--product-color)">
            <div>
                @livewire('products')
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