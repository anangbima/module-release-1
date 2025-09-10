<?php

namespace Modules\ModuleRelease1\Http\Controllers\Api\Internal\Auth;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Services\Auth\AuthenticationApiService;
use Modules\ModuleRelease1\Services\Shared\ApiResponseService;

class EmailVerificationPromptController extends Controller
{
    public function __construct(
        protected AuthenticationApiService $authService,
        protected ApiResponseService $apiResponseService
    ) {}

    /**
     * Show the email verification prompt.
     */
    public function __invoke(Request $request)
    {
        $user = $request->user(module_release_1_meta('snake').'_api');

        if ($user && $user->hasVerifiedEmail()) {
            return $this->apiResponseService->success(
                null,
                'Email already verified',
                200
            );
        }

        return $this->apiResponseService->error(
            'Email verification required',
            403
        );
    }
}
