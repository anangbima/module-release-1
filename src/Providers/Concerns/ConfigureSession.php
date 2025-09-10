<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Session;
use Modules\ModuleRelease1\Session\ModuleSessionHandler;

trait ConfigureSession
{
    protected function configureSession()
    {
        $this->app->resolving(SessionManager::class, function ($sessionManager) {
            config([
                'session.driver'     => env('MODULE_RELEASE_1_SESSION_DRIVER', 'database'),
                'session.connection' => env('MODULE_RELEASE_1_SESSION_CONNECTION', 'module_release_1'),
                'session.table'      => env('MODULE_RELEASE_1_SESSION_TABLE', 'module_release_1_sessions'),
                'session.cookie'     => env('MODULE_RELEASE_1_SESSION_COOKIE', 'module_release_1_session'),
            ]);
        });
        
        // Register driver session custom
        Session::extend('module_database', function ($app) {
            $connection = $app['db']->connection(config('session.connection'));
            $table      = config('session.table');
            $lifetime   = config('session.lifetime');

            return new ModuleSessionHandler($connection, $table, $lifetime, $app);
        });
    }
}
