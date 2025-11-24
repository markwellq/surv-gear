<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class GeneralController extends Controller
{
     public function home()
    {   
       $slides = [
            '/images/sponsors/sponsor-1.png',
            '/images/sponsors/sponsor-2.svg',
            '/images/sponsors/sponsor-4.svg',
            '/images/sponsors/sponsor-5.svg',
            '/images/sponsors/sponsor-6.svg',
            '/images/sponsors/sponsor-7.svg',
            '/images/sponsors/sponsor-8.webp',
        ];

        $products = Product::where('discount', '1')->get();

        return view("home", compact('products', 'slides'));
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

    public function admin(){
        return view('admin.admin');
    }

}
