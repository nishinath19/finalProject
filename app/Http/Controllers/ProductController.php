<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            return view('product.show', compact('product'));
        } else {
            return "No product found for the specified ID.";
        }
    }

    // In your controller
    public function showProducts()
    {
        $result = // Logic to fetch products
        return view('products', compact('result'));
    }

}
