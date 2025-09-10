<?php

namespace Modules\ModuleRelease1\View\Components;

use Illuminate\View\Component;
use Modules\ModuleRelease1\Helpers\ModuleMeta;

class AuthLayout extends Component
{

    public function __construct(public ?string $title = null, public ?array $breadcrumbs = null)
    {
        $this->title = $title ?? config('app.name', 'My Application ');
        $this->breadcrumbs = $breadcrumbs ?? [];
    }
    public function render()
    {
        return view(module_release_1_meta('kebab') . '::layouts.auth');
    }
}
