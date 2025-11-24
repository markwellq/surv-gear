<div>
    @if($cart && $cart->cartItems->count())
        @foreach ($cart->cartItems as $item)
            <div class="flex flex-col md:flex-row gap-4 items-center justify-between mb-2 py-2 px-4">
                <div class="flex flex-col md:flex-row gap-4 items-center justify-center">
                    <div class="w-[70px] h-[70px] md:w-[150px] md:h-[150px]">
                        <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="w-full h-full object-cover rounded">
                    </div>
                    <div class="flex flex-col gap-2 md:gap-4 items-center justify-center border-0 md:border-r-[0.1px] px-4 border-white">
                        <p class="text-(--text-white)">{{ $item->product->name }}</p>

                        <div class="flex items-center gap-4">
                          <button wire:click="decrementQuantity({{ $item->id }})" class="text-(--text-white) px-2 border-[0.1px] border-white text-[16px] cursor-pointer">
                              -
                          </button>
                          <span class="text-(--text-white) font-bold">{{ $item->quantity }}</span>
                          <button wire:click="incrementQuantity({{ $item->id }})" class="text-(--text-white) px-2 border-[0.1px] border-white text-[16px] cursor-pointer">
                              +
                          </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-center font-bold">
                        @if ($item->product->discount)
                         <p class="text-(--text-white)">Total: ${{ number_format($item->quantity * $item->product->discount_price, 2) }}</p>
                         
                        @else
                         <p class="text-(--text-white)">Total: {{ ($item->quantity * $item->product->price) }}</p>
                        @endif
                    </div>
                </div>

            </div>
        @endforeach
        <div class="flex flex-col gap-4 py-2 px-4 border-t-[0.1px] border-white">
            <p class="text-(--text-white) mt-5 text-[28px]">
                All Total: $ {{ 
                number_format(
                    $cart->cartItems->sum(
                        fn($i) =>
                        $i->quantity * (
                            $i->product->discount_price > 0
                            ? $i->product->discount_price
                            : $i->product->price
                        )
                ),2
                )
                 }}
            </p>
            <button class="text-(--text-white) cursor-pointer py-2 border-[0.1px] px-6 border-white hover:bg-white/10">Order</button>
        </div>
    @else
    <div class="flex items-center justify-center mt-20">
        <p class="text-(--text-white)">Nothing to buy</p>
    </div>
    @endif
</div>
