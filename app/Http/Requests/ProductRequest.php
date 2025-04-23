<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_code' => 'required|string|unique:products',
            'product_name' => 'required|string',
            'storage'      => 'required|numeric',
            'display'      => 'required|string',
            'ram'          => 'required|numeric',
            'processor'    => 'required|string',
            'camera'       => 'required|string',
            'battery'      => 'required|string',
            'warranty'     => 'required|numeric',
            'price'        => 'required|numeric',
        ];
    }
}
