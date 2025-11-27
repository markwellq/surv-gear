<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class Carts extends Component
{
    public $cart;

    protected $listeners = ['cartUpdated' => 'loadCart'];

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        $user = Auth::user();
        if ($user) {
            $this->cart = Cart::with('cartItems.product')
                ->firstOrCreate(['user_id' => $user->id]);
        }
    }
    public function incrementQuantity($itemId)
    {
        $item = CartItem::find($itemId);
        if ($item) {
            $item->increment('quantity');
            $this->loadCart();
        }
    }
    
    public function decrementQuantity($itemId)
    {
        $item = CartItem::find($itemId);
        if ($item && $item->quantity > 1) {
            $item->decrement('quantity');
            $this->loadCart();
        } elseif ($item && $item->quantity == 1) {
            $item->delete();
            $this->loadCart();
        }
    }

    public function render()
    {
        return view('livewire.carts');
    }
}
