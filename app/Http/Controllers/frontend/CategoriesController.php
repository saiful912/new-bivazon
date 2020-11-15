<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class CategoriesController extends Controller
{
    public function wholesaleCategory()
    {
        $categories = Category::orderBy('id', 'asc')->where('category_id', null)->get();
        return view('frontend.pages.wholesale_category', compact('categories'));
    }

    public function wholesaleShop($id)
    {
        $category = Category::with('merchants')->find($id);
        if (!is_null($category)) {
            return view('frontend.pages.wholesale_shop_page', compact('category'));
        } else {
            session()->flash('errors', 'Sorry !! There is no Shop by this ID');
            return redirect()->back();
        }
    }

    public function subcategoriesWholesale($id, $shop_id)
    {
        $category = Category::with('merchants')->find($id);
        $categories = Category::orderBy('id', 'asc')->where('category_id', $category->id)->get();
        $user = User::with('merchant')->where('merchant_id', $shop_id)->first();

        return view('frontend.pages.wholesale_subcategory', compact('category', 'user', 'categories'));
    }

    public function retailCategory()
    {
        $categories = Category::orderBy('id', 'desc')->where('category_id', null)->get();
        return view('frontend.pages.retail_category', compact('categories'));
    }

    public function retailShop($id)
    {
        $category = Category::with('merchants')->find($id);
        if (!is_null($category)) {
            return view('frontend.pages.retail_shop_page', compact('category'));
        } else {
            session()->flash('errors', 'Sorry !! There is no Shop by this ID');
            return redirect()->back();
        }
    }

    public function subcategoriesRetail($id,$shop_id)
    {
        $category = Category::with('merchants')->find($id);
        $categories = Category::orderBy('id', 'asc')->where('category_id', $category->id)->get();
        $user = User::with('merchant')->where('merchant_id', $shop_id)->first();
        return view('frontend.pages.retail_subcategory', compact('category','user','categories'));
    }

    public function merchantSubCat($id)
    {
        $users=User::with('product')->find($id);
//        $categories = Category::orderBy('id', 'asc')->get();
        return view('frontend.pages.merchant_subcat',compact('users'));
    }
}
