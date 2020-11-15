<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'merchant_id' => 'required',
            'payment_method' => 'required',
            'amount' => 'required',
            'number' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'merchant_id.required' => 'Please provide Seller Shop Name',
            'payment_method.required' => 'Please provide payment method',
            'amount.required' => 'Please provide amount',
            'number.required' => 'Please provide Your Account Number',
        ];
    }
}
