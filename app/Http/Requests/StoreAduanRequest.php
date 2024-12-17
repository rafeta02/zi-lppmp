<?php

namespace App\Http\Requests;

use App\Models\Aduan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAduanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('aduan_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'title' => [
                'string',
                'nullable',
            ],
        ];
    }
}
