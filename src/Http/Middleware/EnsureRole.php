<?php

namespace Modules\ModuleRelease1\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureRole
{
    public function handle(Request $request, Closure $next, $guard = 'module_release_1_web', ...$roles): Response
    {
        $user = Auth::guard($guard)->user();

        if (!$user || !$user->hasAnyRole($roles)) {
            abort(403, 'You do not have the required role.');
        }

        return $next($request);
    }

}
