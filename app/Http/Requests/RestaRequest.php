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
}
