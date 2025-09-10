<?php

namespace Modules\ModuleRelease1\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string $guard = 'module_release_1_web')
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::guard($guard)->user();

            // Redirect berdasarkan role
            if ($user->hasRole('admin')) {
                return redirect()->route(module_release_1_meta('kebab').'.admin.index');
            }

            return redirect()->route(module_release_1_meta('kebab').'.user.index');
        }

        return $next($request);
    }
}
