<?php

namespace Modules\ModuleRelease1\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasUlids;
    
    public function getConnectionName()
    {
        return config('modulerelease1.permission.connection', 'module_release_1');
    }

    public function getTable()
    {
        return config('modulerelease1.permission.table_names.roles', 'module_release_1_roles');
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            Permission::class,
            config('modulerelease1.permission.table_names.role_has_permissions', 'module_release_1_role_has_permissions'),
            'role_id',
            'permission_id'
        );
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            config('modulerelease1.permission.table_names.model_has_roles', 'module_release_1_model_has_roles'),
            'role_id',
            'model_id'
        )->withPivot('model_type');
    }

}
