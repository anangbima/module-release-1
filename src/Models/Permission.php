<?php

namespace Modules\ModuleRelease1\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use HasUlids;

    public function getConnectionName()
    {
        return config('modulerelease1.permission.connection', 'module_release_1');
    }

    public function getTable()
    {
        return config('modulerelease1.permission.table_names.permissions', 'module_release_1_permissions');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            config('modulerelease1.permission.table_names.role_has_permissions', 'module_release_1_role_has_permissions'),
            'permission_id',
            'role_id'
        );
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            config('modulerelease1.permission.table_names.model_has_permissions', 'module_release_1_model_has_permissions'),
            'permission_id',
            'model_id'
        )->withPivot('model_type');
    }
}
