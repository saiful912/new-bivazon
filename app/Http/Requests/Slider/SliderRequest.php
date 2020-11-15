<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title' => 'required',
//            'image' => 'image|required',
            'priority' => 'required',
            'button_link' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please provide slider title',
            'priority.required' => 'Please provide slider priority',
//            'image.required' => 'Please provide slider image',
            'image.image' => 'Please provide a valid slider image',
            'button_link.url' => 'Please provide a valid slider button link',
        ];
    }
}
