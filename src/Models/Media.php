<?php

namespace Modules\ModuleRelease1\Models;

class Media extends BaseModel
{
    /**
     * Resolve table name from config
     */
    protected function resolveTableName(): string
    {
        return config('module_release_1.tables.media', 'media');
    }

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'path',
        'type',
        'size',
        'disk',
        'collection',
        'usage',
    ];

    public function media()
    {
        return $this->morphTo();
    }

    public function usages()
    {
        return $this->hasMany(MediaUsage::class, 'media_id');
    }
}
