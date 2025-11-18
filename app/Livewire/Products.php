<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products;
    public $total;

    public $pagination;

    public function mount(){
        $this -> products = Product::all();
        $this -> total = Product::count();
    }
    public function render()
    {
        return view('livewire.products');
    }
}
