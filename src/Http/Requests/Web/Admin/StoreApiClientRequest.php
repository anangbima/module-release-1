<?php

namespace Modules\ModuleRelease1\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreApiClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:module_release_1.api_clients,name',
            ],
        ];
    }
}
