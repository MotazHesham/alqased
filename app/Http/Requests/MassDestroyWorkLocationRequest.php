<?php

namespace App\Http\Requests;

use App\Models\WorkLocation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWorkLocationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('work_location_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:work_locations,id',
        ];
    }
}
