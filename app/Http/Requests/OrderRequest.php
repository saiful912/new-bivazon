<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            "name" => "required",
            "phone" => "required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/",
            "address" => "required",
            "district_id" => "required",
            "courier_id" => "required",
            "payment_method" => "required",
        ];
    }
}
