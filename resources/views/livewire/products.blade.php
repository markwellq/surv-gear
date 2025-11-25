{{-- Homepage --}}
<section class=" mb-10">

     <div class="flex items-center justify-center">
        <p class="text-(--text-white) text-[14px]">Lorem, ipsum dolor. ALL</p>
     </div>

               <div class="flex flex-row items-center justify-between mb-10 container mx-auto px-10">
                <div>
                    <p class="text-(--text-white)">Lorem</p>
                </div>
            
                <div>
                  <p class="text-[14px] md:text-[16px] lg:text-[18px] text-(--text-white)">
                     {{ $total }} products
                  </p> 
                </div>
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
                       @if ($product->discount)
                            <h3 class="text-(--text-white) font-bold text-[14px] sm:text-[15px] lg:text-[18px]">{{ $product->name }}</h3>
                            <div class="flex flex-row gap-2">
                                <p style="text-decoration: line-through" class="text-(--text-white)">{{ $product->price }}$</p>
                                <p class="text-(--text-white)">{{ $product->discount_price }}$</p>
                            </div>
                        @else 
                            <h3 class="text-(--text-white) font-bold text-[14px] sm:text-[15px] lg:text-[18px]">{{ $product->name }}</h3>
                            <p class="text-(--text-white)">{{ $product->price }}$</p>
                        @endif
                </div>
            </div>
        </a>
        
        @endforeach
    </div>
</section>
