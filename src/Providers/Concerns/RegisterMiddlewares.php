<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

use Modules\ModuleRelease1\Http\Middleware\CheckUserStatus;
use Modules\ModuleRelease1\Http\Middleware\EnsureEmailIsVerified;
use Modules\ModuleRelease1\Http\Middleware\EnsureRole;
use Modules\ModuleRelease1\Http\Middleware\RedirectIfAuthenticated;
use Modules\ModuleRelease1\Http\Middleware\VerifyApiClient;

trait RegisterMiddlewares
{
    protected function registerMiddlewares(): void
    {
        $router = app('router');

        $router->aliasMiddleware('module_release_1.role', EnsureRole::class);
        $router->aliasMiddleware('module_release_1.guest', RedirectIfAuthenticated::class);
        $router->aliasMiddleware('module_release_1.verified', EnsureEmailIsVerified::class);
        $router->aliasMiddleware('module_release_1.status', CheckUserStatus::class);
        $router->aliasMiddleware('module_release_1.verify_api_client', VerifyApiClient::class);
    }
}
