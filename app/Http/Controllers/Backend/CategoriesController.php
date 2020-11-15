<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ImageUploadAble;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    use ImageUploadAble;

    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        return view('backend.dashboard.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.dashboard.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
        ], [
            'name.required' => 'Please provide a Category name',
        ]);

        $data = [
            'name' => $request->name,
            'status' => $request->status ? 1 : 0,
            'category_id' => $request->category_id ?? null,
        ];

        // Category banner Image Insert
        if ($request->hasFile('banner_image')) {
            $image_banner = $request->file('banner_image');
            $imag = $this->upload($image_banner, 'categories', 'category_banner');
            $data['banner_image'] = $imag;
        }
        // Category Image Insert
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = $this->upload($image, 'categories', 'category');
            $data['image'] = $img;
        }
        try {
            Category::create($data);
            notify()->success(' Category created successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $throwable) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $main_categories = Category::orderBy('name', 'desc')->where('category_id', null)->get();
        $category = Category::find($id);
        if (!is_null($category)) {
            return view('backend.dashboard.category.edit', compact('main_categories', 'category'));
        } else {
            return redirect()->route('admin.categories');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Please provide a Category name',
        ]);
        if (empty($request['status'])) {
            $status = 0;
        } else {
            $status = 1;
        }
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $status;
        $category->category_id = $request->category_id;
        // Category banner Image Insert
        if ($request->hasFile('banner_image')) {
            $this->deleteOldFile("categories/{$category->banner_image}");
            $image_banner = $request->file('banner_image');
            $imag = $this->upload($image_banner, 'categories', 'category_banner');
            $category->banner_image = $imag;
        }
        // Category Image Insert
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = $this->upload($image, 'categories', 'category');
            $category->image = $img;
        }
        $category->save();
        notify()->success(' Courier updated successfully ', 'success');
        return redirect()->back();
    }

    public function delete($id)
    {

    }
}
