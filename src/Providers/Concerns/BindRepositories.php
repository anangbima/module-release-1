<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

trait BindRepositories
{
    protected function bindRepositories(): void
    {
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\SettingRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\SettingRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\MediaUsageRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\MediaUsageRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\MediaRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\MediaRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\ApiClientRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\ApiClientRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\PermissionRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\PermissionRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\RoleRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\RoleRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\UserRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\UserRepository::class);
        $this->app->bind(\Modules\ModuleRelease1\Repositories\Interfaces\LogActivityRepositoryInterface::class, \Modules\ModuleRelease1\Repositories\LogActivityRepository::class);
        
    }
}