<div x-data="{payment: false, purchasing: false}" class="relative">
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
                         <p class="text-(--text-white)">Total: ${{ number_format($item->quantity * $item->product->discount_price, 2) }}$</p>
                         
                        @else
                         <p class="text-(--text-white)">Total: {{ ($item->quantity * $item->product->price) }}$</p>
                        @endif
                    </div>
                </div>

            </div>
        @endforeach
        <div class="flex flex-col gap-4 py-2 px-4 border-t-[0.1px] border-white">
            <p class="text-(--text-white) mt-5 text-[28px]">
                All Total: {{ 
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
                 }} $
            </p>
            <button @click="payment = true" class="text-(--text-white) cursor-pointer py-2 border-[0.1px] px-6 border-white hover:bg-white/10">Continue</button>
        </div>
    @else
    <div class="flex items-center justify-center mt-20">
        <p class="text-(--text-white)">Nothing to buy</p>
    </div>
    @endif

     <div x-show="payment, purchasing" x-cloak class="fixed inset-0">
        <div class="absolute inset-0 bg-black/50">
          <div class="absolute inset-0 flex items-center justify-center">

            <div @click.away="payment=false" class="bg-white p-8 w-[300px] md:w-[400px] relative">
                      <button @click="payment=false" class="absolute right-2 top-2 w-12 h-12 cursor-pointer text-(--text-black) p-2">
                              <x-bi-x class="w-10 h-10" />
                      </button>

                <div class="flex flex-col items-center justify-center mt-4 mb-2 gap-4">
                    <div class="flex flex-row items-center justify-center bg-(--gray-color-3) rounded-sm p-4 select-none">
                        <span class="text-black w-8 md:w-12 flex items-center justify-center">
                            <x-fontisto-mastercard class="w-6 h-6" />
                        </span>
                        <p> G.Raymond **** 9010</p>
                    </div>
                    <img src="{{ asset('storage/images/credit-card.png') }}"  alt="credit-card" class="h-full object-contain w-[200px] rounded-sm select-none">
                </div>
                <form class="flex flex-col gap-2 items-center justify-center w-full max-w-[350px] mt-5">
                    @csrf
                    <input type="text" placeholder="Phone number" class="border-[0.1px] p-2">
                    <input type="text" placeholder="Address" class="border-[0.1px] p-2">
                    <input type="text" placeholder="City" class="border-[0.1px] p-2">
                    <input type="text" placeholder="Postal code" class="border-[0.1px] p-2">
                </form>
                     <div class="flex flex-row justify-between items-center mt-10">
                        <button @click="purchasing=true" class="text-(--text-black) cursor-pointer py-2 px-6 border-[0.1px] border-black hover:bg-white/10 ">Order</button>
                            <p class="font-bold">
                                     All Total: {{ 
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
                                     }} $
                              </p>
                      </div>

                      <div x-show="purchasing" class="flex items-center justify-center mt-4">
                        <p @click="purchasing=false" class="text-green-300">Success, thank for purchase</p>
                      </div>
                 </div>
            </div>
        </div>
    </div> 
</div>