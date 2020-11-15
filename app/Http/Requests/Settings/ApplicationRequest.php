<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'app_name' => 'sometimes|required',
            'address' => 'sometimes|required',
            'logo' => 'nullable|image',
            'mobile_logo' => 'nullable|image',
            'favicon' => 'nullable|image',
        ];
    }
}
