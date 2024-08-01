<?php

namespace App\Http\Requests;

use App\Models\ClientsReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientsReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('clients_review_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'role' => [
                'string',
                'nullable',
            ],
            'rate' => [
                'required',
            ],
        ];
    }
}
