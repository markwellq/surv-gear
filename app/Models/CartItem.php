<?php

namespace App\Models;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItem extends Model
{
    protected $fillable = [
        "product_id",
        "cart_id",
        'price',
        "quantity"
    ];

      public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

     public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
    
}
