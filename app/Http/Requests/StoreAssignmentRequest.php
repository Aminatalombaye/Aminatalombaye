<?php

namespace App\Http\Requests;

use App\Models\Assignment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAssignmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('assignment_create');
    }

    public function rules()
    {
        return [
            'type_attribution' => [
                'string',
                'nullable',
            ],
            'asset' => [
                'string',
                'nullable',
            ],
            'quantity' => [
                'string',
                'nullable',
            ],
            'user' => [
                'string',
                'nullable',
            ],
        ];
    }
}
