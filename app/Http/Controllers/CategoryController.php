<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug){
        $category = Category::where('slug', $slug)->with(['products' => function($query) {
            $query->limit(10);
        }])->firstOrFail();
        
        return view('category.show', ['category' => $category]);
    }
}
