<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('admin.admin', compact('categories', 'products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'price' => 'required|numeric',
            'slug' => 'required|unique:products,slug',
            'image' => 'required|image|max:2048',
            'description' => 'required',
            'short_desc' => 'required',
            'short_desc_2' => 'required',
            'discount' => 'required|boolean',
            'discount_price' => 'required|numeric'
        ]);


        $path = $request->file('image')->store('products', 'public');
        
        Product::create([
            'category_id' => $data['category_id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'slug' => $data['slug'],
            'image' => $path,
            'description' => $data['description'],
            'short_desc' => $data['short_desc'],
            'short_desc_2' => $data['short_desc_2'],
            'discount' => $data['discount'],
            'discount_price' => $data['discount_price']
        ]);

        return back()->with('message', 'Product added');
    }

    public function remove(Request $request){
        $data = $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $products = Product::findOrFail($data['product_id']);
        $products -> delete();

        return back()->with('message', 'Product removed');
    }
}


// to commit