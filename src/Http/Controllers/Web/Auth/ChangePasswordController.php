<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Http\Requests\Web\Auth\ChangePasswordRequest;
use Modules\ModuleRelease1\Services\Auth\AuthenticationService;

class ChangePasswordController extends Controller
{
    public function __construct(
        protected AuthenticationService $authService,
    ) {}

    /**
     * Display the change password form.
     */
    public function index(Request $request)
    {
        $data = [
            'title' => 'Change Password',
        ];

        return view(module_release_1_meta('kebab').'::web.auth.change-password', $data);
    }
    
    /**
     * Handle the change password request.
     */
    public function store(ChangePasswordRequest $request)
    {
        $this->authService->changePassword($request->validated());

        return redirect()->route(module_release_1_meta('kebab').'.login')->with('success', 'Password changed successfully.');
    }
}
