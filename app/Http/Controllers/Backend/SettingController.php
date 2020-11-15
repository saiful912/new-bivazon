<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\ApplicationRequest;
use App\Models\Setting;
use App\Traits\ImageUploadAble;

class SettingController extends Controller
{
    use ImageUploadAble;

    public function index()
    {
        $settings = Setting::first();
        return view('backend.settings.index',compact('settings'));
    }

    public function updateApplication(ApplicationRequest $request)
    {
        $data = [
            'app_name' => $request->app_name,
            'address' => $request->address,
        ];
        if ($request->hasFile('logo')) {
            $this->deleteOldFile('settings/logo'.\setting('logo'), 'upload');
            $logo = $this->upload($request->file('logo'), 'settings/logo');
            $data['logo'] = $logo;
        }
        if ($request->hasFile('mobile_logo')) {
            $mobile_logo = $this->upload($request->file('mobile_logo'), 'settings/logo');
            $data['mobile_logo'] = $mobile_logo;
        }
        if ($request->hasFile('favicon')) {
            $favicon = $this->upload($request->file('favicon'), 'settings/favicon');
            $data['favicon'] = $favicon;
        }
        try {
            Setting::updateSettings($data);
            notify()->success('Created Successfully.');
            return redirect()->back();
        } catch (\Throwable $throwable) {
            notify()->error('Something went wrong.');
            return redirect()->back();
        }
    }

    public function mail()
    {
        return view('backend.settings.index');
    }
}
