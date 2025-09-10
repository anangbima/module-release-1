<?php

namespace Modules\ModuleRelease1\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

abstract class BaseMigration extends Migration
{
    /**
     * Get the connection name for the migration.
     */
    public function getConnection(): ?string
    {
        return env('MODULE_RELEASE_1_DB_CONNECTION')
            ?? config('module_release_1.database.database_connection')
            ?? 'module_release_1';
    }

    /**
     * Get the schema builder for the migration.
     */
    protected function schema()
    {
        return Schema::connection($this->getConnection());
    }
}