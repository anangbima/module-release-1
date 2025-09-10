<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

trait LoadModelConfigs
{
    protected function loadModelConfigs(): void
    {
        $configDir = base_path('modules/module-release-1/config');

        if (!is_dir($configDir)) return;

        foreach (scandir($configDir) as $modelDir) {
            $modelPath = $configDir . "/$modelDir";

            if (!is_dir($modelPath) || in_array($modelDir, ['.', '..'])) continue;

            foreach (glob($modelPath . '/*.php') as $filePath) {
                $filename = basename($filePath, '.php'); // e.g. table, uploads

                $this->mergeConfigFrom(
                    $filePath,
                    "module_release_1.{$filename}.{$modelDir}"
                );
            }
        }
    }
}
