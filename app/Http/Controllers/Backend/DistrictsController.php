<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    public function create()
    {
        return view('backend.dashboard.districts.create');
    }

    public function index()
    {
        $districts = District::orderBy('priority', 'asc')->get();

        return view('backend.dashboard.districts.index', compact('districts'));
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'priority' => 'required',
            ], [
                'name.required' => 'Please provide a division name',
                'priority.required' => 'Please provide a priority name',
            ]);

            $district = new District();
            $district->name = $request->name;
            $district->priority = $request->priority;
            $district->save();
            notify()->success('District created successfully','success');
            return redirect()->back();
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong','error');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $district = District::find($id);
        if (! is_null($district)) {
            return view('backend.dashboard.districts.edit', compact('district'));
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'priority' => 'required',
            ], [
                'name.required' => 'Please provide a division name',
                'priority.required' => 'Please provide a priority name',
            ]);
            $district = District::find($id);
            $district->name = $request->name;
            $district->priority = $request->priority;
            $district->save();
            notify()->success('District updated successfully','success');
            return redirect()->route('districts');
        } catch (\Throwable $exception) {
            notify()->error('Something went wrong','error');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $district = District::find($id);
        if (! is_null($district)) {
            //delete all the courier for this division
            $couriers = Courier::where('district_id', $district->id)->get();
            foreach ($couriers as $courier) {
                $courier->delete();
            }
            $district->delete();
        }
        notify()->success('District deleted successfully','success');
        return back();
    }
}
