<?php

namespace App\Http\Requests;

use App\Models\Slider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSliderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('slider_edit');
    }

    public function rules()
    {
        return [
            'image' => [
                'required',
            ],
            'title_1' => [
                'string',
                'nullable',
            ],
            'title_2' => [
                'string',
                'nullable',
            ],
            'title_3' => [
                'string',
                'nullable',
            ],
            'button_name' => [
                'string',
                'nullable',
            ],
            'button_url' => [
                'string',
                'nullable',
            ],
        ];
    }
}
