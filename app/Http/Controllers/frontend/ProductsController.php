<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function wholesaleProducts($id, $merchant_id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->where('user_id', $merchant_id)->get();

        return view('frontend/pages/wholesale_products', [
            'products' => $products,
            'category' => $category
        ]);
    }

    public function retailProducts($id, $merchant_id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->where('user_id', $merchant_id)->get();
        return view('frontend/pages/retail_products', [
            'products' => $products,
            'category' => $category
        ]);
    }

}
