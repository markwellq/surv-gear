<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class GeneralController extends Controller
{
     public function home()
    {   
        $products = Product::where('discount', '1')->get();

        return view("home", compact('products'));
    }

    public function gear()
    {
        $product = Product::all();
        $total = Product::count();

        return view('gear', compact('product', 'total'));
    }

     public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function aboutUs()
    {
        return view("aboutUs");
    }

}
