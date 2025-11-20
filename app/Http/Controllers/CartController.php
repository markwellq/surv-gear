<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
      public function index()
    {   
        $user = Auth::user();

        $cart = Cart::with('cartItems.product')->firstOrCreate([
            'user_id' => $user->id
        ]); 

        return view('product.show', compact('cart'));
    }
}
