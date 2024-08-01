<?php

namespace App\Http\Requests;

use App\Models\WorkLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('work_location_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
        ];
    }
}
