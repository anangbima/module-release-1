<?php

namespace Modules\ModuleRelease1\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureEmailIsVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user(module_release_1_meta('snake').'_web');

        if (! $user || ! $user->hasVerifiedEmail()) {
            return redirect()->route(module_release_1_meta('kebab').'.verification.notice');
        }

        return $next($request);
    }
}

