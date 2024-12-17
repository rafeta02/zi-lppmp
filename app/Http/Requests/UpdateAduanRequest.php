<?php

namespace App\Http\Requests;

use App\Models\Aduan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAduanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('aduan_edit');
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
