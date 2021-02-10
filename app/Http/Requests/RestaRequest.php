<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaRequest extends FormRequest
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
            'name' => 'required',
            'type' => 'required',
            'stock' => 'required|integer|min:1|max:1000',
            'price' => 'required|integer|min:1000|max:10000000'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please insert name of data!',
            'type.required' => 'Please select type of data!',
            'stock.required' => 'Please set stock of data!',
            'stock.integer' => 'Please set stock correctly!',
            'stock.min' => 'Minimum data is 1 piece',
            'stock.max' => 'Maximum data is 1000 pieces',
            'price.required' => 'Please set price of data!',
            'price.integer' => 'Please set price correctly!',
            'price.min' => 'Minimum price is Rp. 1000,00-',
            'price.max' => 'Maximum price is Rp. 10.000.000,00-',
        ];
    }
}
