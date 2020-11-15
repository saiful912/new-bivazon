<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SlidersController extends Controller
{
//    use ImageUploadAble;

    public function index()
    {
        $sliders = Slider::orderBY('priority', 'asc')->get();
        return view('backend.dashboard.sliders.index', compact('sliders'));
    }

    public function store(SliderRequest $request)
    {
        try {
            $slider = new Slider();
            $slider->title = $request->title;
            $slider->button_text = $request->button_text;
            $slider->button_link = $request->button_link;
            $slider->priority = $request->priority;
            if ($request->hasFile('image')) {
                //insert Image
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/slider/' . $img);
                Image::make($image)->save($location);
                $slider->image = $img;
            }
            $slider->save();
            notify()->success('A new Slider has created successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }

    }

    public function edit(SliderRequest $request, $id)
    {

            $slider = Slider::find($id);
            $slider->title = $request->title;
            $slider->button_text = $request->button_text;
            $slider->button_link = $request->button_link;
            $slider->priority = $request->priority;
            if ($request->image > 0) {
                //delete the old image
                if (File::exists('img/slider/' . $slider->image)) {
                    File::delete('img/slider/' . $slider->image);
                }
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/slider/' . $img);
                Image::make($image)->save($location);
                $slider->image = $img;
            }
            $slider->update();
            notify()->success('Slider Update successfully ', 'success');
            return redirect()->back();
    }


    public function delete($id)
    {
        try {
            $slider = Slider::find($id);
            if (!is_null($slider)) {
                if (File::exists('img/slider/' . $slider->image)) {
                    File::delete('img/slider/' . $slider->image);
                }
                $slider->delete();
            }
            notify()->success('Slider Delete ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }

    }
}
