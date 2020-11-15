<?php

namespace App\Http\Controllers\Backend;

use App\Enums\ShopType;
use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Traits\ImageUploadAble;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use ImageUploadAble;

    public function index()
    {
        $products = Product::with(['user.merchant'])->paginate(20);
        return view('backend.dashboard.products.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('backend.dashboard.products.create', [
            'categories' => Category::select(['id', 'name'])->where('category_id', '!=', null)->get(),
            'types' => [ShopType::RETAIL(), ShopType::WHOLESALE()],
            'shops' => User::with('merchant')->where('type', UserType::MERCHANT())->get(),
        ]);
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->input('name'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'status' => $request->input('status') ? 1 : 0,
            'sku' => $request->input('sku'),
            'category_id' => $request->input('category_id'),
            'user_id' => $request->input('user_id'),
            'type' => $request->input('product_type'),
            'code' => $request->input('code'),
        ];

        $image_names = [];
        if ($request->has('images')) {
            foreach ($request->file('images') as $key => $image) {
                $image_names[] = $this->upload($image, 'products', 'product');
            }
        }
        $data['images'] = $image_names;

        try {
            Product::create($data);
            notify()->success("Product Successfully Created.Please check your product list");
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        return view('backend.dashboard.products.edit', [
            'product' => Product::find($id),
            'categories' => Category::select(['id', 'name'])->where('category_id', '!=', null)->get(),
            'types' => [ShopType::RETAIL(), ShopType::WHOLESALE()],
            'shops' => User::with('merchant')->where('type', UserType::MERCHANT())->get(),
        ]);
    }

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $data = [
            'name' => $request->input('name'),
            'short_description' => $request->input('short_description'),
            'long_description' => $request->input('long_description'),
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'status' => $request->input('status') ? 1 : 0,
            'sku' => $request->input('sku'),
            'category_id' => $request->input('category_id'),
            'user_id' => $request->input('user_id'),
            'type' => $request->input('product_type'),
            'code' => $request->input('code'),
        ];

        if ($request->has('images')) {
            foreach ($request->file('images') as $key => $image) {
                $image_names[] = $this->upload($image, 'products', 'product');
            }
            $data['images'] = $image_names;
        }

        try {
            $product->update($data);
            notify()->success('Product Successfully updated.Please check your product list');
            return redirect()->route('products');
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again');
            return redirect()->back();
        }

    }

    public function delete($id)
    {
    }
}
