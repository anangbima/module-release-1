<?php

namespace Modules\ModuleRelease1\Models;

use Modules\ModuleRelease1\Traits\HasSlug;

class ApiClient extends BaseModel
{
    use HasSlug;

    /**
     * Resolve table name from config
     */
    protected function resolveTableName(): string
    {
        return config('module_release_1.tables.api_clients', 'api_clients');
    }

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'slug',
        'api_key',
        'secret_key',
        'is_active',
    ];

    protected $casts = [
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
    ];

    /**
     * Get the Route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
