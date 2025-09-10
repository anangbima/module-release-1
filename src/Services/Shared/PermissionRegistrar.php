<?php

namespace Modules\ModuleRelease1\Services\Shared;

use Modules\ModuleRelease1\Models\Permission;
use Modules\ModuleRelease1\Models\Role;
use Spatie\Permission\PermissionRegistrar as SpatiePermissionRegistrar;

class PermissionRegistrar extends SpatiePermissionRegistrar
{
    public function getPermissionClass(): string
    {
        return Permission::class;
    }

    public function getRoleClass(): string
    {
        return Role::class;
    }
}