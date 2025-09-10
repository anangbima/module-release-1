<?php

namespace Modules\ModuleRelease1\Traits;

use Modules\ModuleRelease1\Services\Shared\SlugService;

trait HasSlug
{
    public static function bootHasSlug()
    {
        static::creating(function ($model) {
            $slugService = app(SlugService::class);
            $sourceField = $model->slugSource ?? 'name';
            $model->slug = $slugService->generate($model->{$sourceField}, get_class($model));
        });

        static::updating(function ($model) {
            $sourceField = $model->slugSource ?? 'name';
            if ($model->isDirty($sourceField)) {
                $slugService = app(SlugService::class);
                $model->slug = $slugService->generate($model->{$sourceField}, get_class($model));
            }
        });
    }
}
