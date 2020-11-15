<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use App\Models\District;
use Illuminate\Http\Request;

class CouriersController extends Controller
{
    public function index()
    {
        $couriers = Courier::orderBy('name','asc')->where('parent_id',NULL)->get();
        return view('backend.dashboard.couriers.index',compact('couriers'));
    }

    public function create()
    {
        $districts = District::orderBy('priority', 'asc')->get();

        return view('backend.dashboard.couriers.create', compact('districts'));
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'district_id' => 'required',
            ], [
                'name.required' => 'Please provide a Courier name',
                'district_id.required' => 'Please provide a District name for Courier',
            ]);

            $courier = new Courier();
            $courier->district_id = $request->district_id;
            $courier->name = $request->name;
            $courier->phone = $request->phone;
            $courier->address = $request->address;
            $courier->parent_id = $request->parent_id;
            $courier->save();
            notify()->success(' Courier created successfully ', 'success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $courier = Courier::find($id);
        $districts = District::orderBy('priority', 'asc')->get();

        return view('backend.dashboard.couriers.edit', compact('courier', 'districts'));
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'district_id' => 'required',
            ], [
                'name.required' => 'Please provide a Courier name',
                'district_id.required' => 'Please provide a District name for Courier',
            ]);

            $courier = Courier::find($id);
            $courier->district_id = $request->district_id;
            $courier->name = $request->name;
            $courier->phone = $request->phone;
            $courier->address = $request->address;
            $courier->parent_id = $request->parent_id;
            $courier->save();
            notify()->success(' Courier Update ', 'success');
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong.please try again .');
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $courier = Courier::find($id);
        if (! is_null($courier)) {
            if ($courier->parent_id == null) {
                $sub_couriers = Courier::orderBy('name', 'desc')->where('parent_id', $courier->id)->get();
                foreach ($sub_couriers as $sub) {
                    $sub->delete();
                }
            }
            $courier->delete();
        }
        notify()->success(' Courier Delete ', 'success');

        return back();
    }
}
