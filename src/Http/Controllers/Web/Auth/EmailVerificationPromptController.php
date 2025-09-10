<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Services\Auth\AuthenticationService;

class EmailVerificationPromptController extends Controller
{
    public function __construct(
        protected AuthenticationService $authService,    
    ) {}
    
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request)
    {
        return $request->user(module_release_1_meta('snake').'_web')?->hasVerifiedEmail()
            ? redirect()->intended()
            : view(module_release_1_meta('kebab').'::web.auth.verify-email');
    }
    
}
