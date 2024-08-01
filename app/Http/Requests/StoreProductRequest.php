<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'type' => [
                'required',
            ],
            'main_image' => [
                'required',
            ],
            'images' => [
                'array',
            ],
            'price' => [
                'required',
            ],
            'model' => [
                'string',
                'nullable',
            ],
            'load' => [
                'string',
                'nullable',
            ],
            'speed' => [
                'string',
                'nullable',
            ],
            'max_stop' => [
                'string',
                'nullable',
            ],
            'max_rise' => [
                'string',
                'nullable',
            ],
        ];
    }
}
