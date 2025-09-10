<?php

namespace Modules\ModuleRelease1\Helpers;

class ModuleMeta
{
    public static function get(string $key): ?string
    {
        $meta = [
            'label' => 'Module Release 1',
            'studly' => 'ModuleRelease1',
            'kebab' => 'module-release-1',
            'snake' => 'module_release_1',
            'plain' => 'modulerelease1',
            'constant' => 'MODULE_RELEASE_1',
        ];

        return $meta[$key] ?? null;
    }
}
