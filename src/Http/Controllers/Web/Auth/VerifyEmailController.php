<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Services\Auth\AuthenticationService;

class VerifyEmailController extends Controller
{
    public function __construct(
        protected AuthenticationService $authService,    
    ) {}
    
    /**
     * Handle the email verification request.
     */
    public function __invoke(Request $request)
    {
        $this->authService->verifyEmail($request->route('user'));

        return redirect()->route(module_release_1_meta('kebab').'.login');
    }
}
