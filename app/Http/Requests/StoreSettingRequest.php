<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_create');
    }

    public function rules()
    {
        return [
            'site_name' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'twitter' => [
                'string',
                'nullable',
            ],
            'facebook' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'behance' => [
                'string',
                'nullable',
            ],
            'author_seo' => [
                'string',
                'nullable',
            ],
            'sitemap_link_seo' => [
                'string',
                'nullable',
            ],
            'clients_count' => [
                'string',
                'nullable',
            ],
            'projects_count' => [
                'string',
                'nullable',
            ],
            'products_count' => [
                'string',
                'nullable',
            ],
            'experience_count' => [
                'string',
                'nullable',
            ],
            'certificates' => [
                'array',
            ],
        ];
    }
}
