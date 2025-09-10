<?php

namespace Modules\ModuleRelease1\Providers\Concerns;

trait RegisterHelpers
{
    protected function registerHelpers()
    {
        foreach (glob(__DIR__ . '/../../Helpers/*.php') as $filename) {
            require_once $filename;
        }
    }
}