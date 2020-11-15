<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::find($id);

        $cart = [
            'product_id' => $product->id,
            'uuid' => Str::uuid(),
            'quantity' => 1,
            'discount' => 0.0,
            'ip' => \request()->ip(),
            'price' => $product->price,
            'sub_total' => $product->price * 1
        ];
        try {
            $oldCart = Cart::where('product_id', $id)->first();

            if (!$oldCart) {
                Cart::create($cart);
            } else {
                $oldCart->update([
                    'sub_total' => $product->price * ($oldCart->quantity + 1),
                    'quantity' => $oldCart->quantity + 1,
                ]);
            }
            notify()->success('Item added to cart successfully');
            return redirect()->back();

        } catch (\Throwable $exception) {
            notify()->warning('Something went wrong please check again.');
            return redirect()->back();
        }
    }
}
