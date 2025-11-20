<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AddToCart extends Component
{   
    public $productId;

    public function addToCart()
    {
        $user = Auth::user();

        $cart = Cart::firstOrCreate([
            'user_id' => $user->id
        ]);

        $product = Product::find($this->productId);

        $item = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $this->productId)
            ->first();

        if($item)
        {
            $item->increment("quantity");
        }
        else
        {
            CartItem::create([
                "cart_id" => $cart->id,
                'product_id' => $this->productId,
                'quantity' => 1,
                'price' => $product->price,
            ]);
        }

        $this->dispatch('cartUpdated');
    }
    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
