<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class GeneralController extends Controller
{
     public function home()
    {
        // $products = Product::take(4)->get();

        return view("home");

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
