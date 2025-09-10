<?php

namespace Modules\ModuleRelease1\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null) // temp
    {
        $guard ??= module_release_1_meta('snake').'_web';

        if (!Auth::guard($guard)->check()) {
            return redirect()->route(module_release_1_meta('kebab').'.login');
        }

        return $next($request);
    }
}
