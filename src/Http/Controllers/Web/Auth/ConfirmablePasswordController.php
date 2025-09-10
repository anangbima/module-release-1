<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Http\Requests\Web\Auth\ConfirmablePasswordRequest;
use Modules\ModuleRelease1\Services\Auth\AuthenticationService;

class ConfirmablePasswordController extends Controller
{
    public function __construct(
        protected AuthenticationService $authService,    
    ) {}

    /**
     * Display the confirmable password form.
     */
    public function create()
    {
        $data = [
            'title' => 'Confirm Password',
        ];

        return view(module_release_1_meta('kebab').'::web.auth.confirm-password', $data);
    }

    /**
     * Handle the confirmable password request.
     */
    public function store(ConfirmablePasswordRequest $request)
    {
        $request->validated();
        $this->authService->confirmPassword($request->password);

        return redirect()->intended();
    }
    
}
