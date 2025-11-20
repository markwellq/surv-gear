<div>
    @if($cart && $cart->cartItems->count())
        @foreach ($cart->cartItems as $item)
            <div class="flex items-center justify-between mb-2">
                <div class="w-16 h-16 ">
                   <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="w-full h-full object-cover rounded">
                </div>

                <div>
                    <p class="text-(--text-white)">{{ $item->product->name }}</p>
                    <p class="text-(--text-white)">Price: ${{ $item->product->price }}</p>
                </div>

                <div class="flex items-center gap-2">
                    <button wire:click="decrementQuantity({{ $item->id }})" class="text-(--text-white) px-2">-</button>
                    <span class="text-(--text-white) font-bold">{{ $item->quantity }}</span>
                    <button wire:click="incrementQuantity({{ $item->id }})" class="text-(--text-white) px-2">+</button>
                </div>

                <p class="text-(--text-white)">Total: ${{ $item->quantity * $item->product->price }}</p>
            </div>
        @endforeach
        <p class="text-(--text-white) mt-5 border-t-[0.1px]">
            All Total: ${{ $cart->cartItems->sum(fn($i) => $i->quantity * $i->product->price) }}
        </p>
    @else
        <p class="text-(--text-white)">Your backpack is empty</p>
    @endif
</div>
