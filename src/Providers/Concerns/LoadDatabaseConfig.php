<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

trait LoadDatabaseConfig
{
    protected function loadDatabaseConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../../config/database.php', 'modulerelease1.database');

        // Ambil isi config
        $config = config('modulerelease1.database');

        // Inject koneksi database baru (misalnya untuk testing)
        if (isset($config['database_connection'], $config['connection'])) {
            config([
                'database.connections.' . $config['database_connection'] => $config['connection'],
            ]);
        }

        // Override prefix permission (Spatie)
        if (isset($config['permission_table_prefix'])) {
            config([
                'permission.table_prefix' => $config['permission_table_prefix'],
            ]);
        }
    }
}
