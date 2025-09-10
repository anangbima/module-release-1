<?php

namespace Modules\ModuleRelease1\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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
                'unique:module_release_1.module_release_1_roles,name,' . $this->route('role')->id,
            ],
            'permissions' => [
                'array',
                'exists:module_release_1.module_release_1_permissions,id',
            ],
        ];
    }
}
