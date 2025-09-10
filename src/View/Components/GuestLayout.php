<?php

namespace Modules\ModuleRelease1\View\Components;

use Illuminate\View\Component;

class GuestLayout extends Component
{
    public function render()
    {
        return view(module_release_1_meta('kebab').'::layouts.guest');
    }
}