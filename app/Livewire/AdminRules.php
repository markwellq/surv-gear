<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Str;

class AdminRules extends Component
{   
    public $category_id, $name, $slug, $image, $price, $description, $short_desc, $short_desc_2, $dicount, $discount_price;

    public function createProduct()
    {
        $this -> validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|min:5',
            'slug' => 'required|unique:products,slug',
            'price' => 'required|numeric',
            'image' => 'nullable|image|min:10',
        ]);

        Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'price' => $this->price,
            'description' => $this->description,
            'short_desc' => $this->short_desc,
            'short_desc_2' => $this->short_desc_2,
            'image' => $this->image,
        ]);


        session()->flash('Product added');
    }

    public function render()
    {
        return view('livewire.admin-rules');
    }
}
