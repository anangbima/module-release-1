<?php

namespace Modules\ModuleRelease1\Http\Controllers\Api\Internal\Auth;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Http\Requests\Api\Auth\LoginRequest;
use Modules\ModuleRelease1\Services\Auth\AuthenticationApiService;
use Modules\ModuleRelease1\Services\Shared\ApiResponseService;

class AuthenticatedSessionController extends Controller
{
    public function __construct(
        protected AuthenticationApiService $authService,
        protected ApiResponseService $apiResponseService
    ) {}
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        $result = $this->authService->login($request);

        if ($result['status'] === 'error') {
            return $this->apiResponseService->error(
                $result['message'],
                $result['code'] ?? 400,
                $result['errors'] ?? null
            );
        }

        return $this->apiResponseService->success($result['data'], 
            $result['message'] ?? 'Login successful', 
            $result['code'] ?? 200
        );
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $result = $this->authService->logout();

        if ($result['status'] === 'error') {
            return $this->apiResponseService->error(
                $result['message'],
                $result['code']
            );
        }

        return $this->apiResponseService->success($result['message'], 
            'Logout successful', 
            $result['code'] ?? 200
        );
    }
}
