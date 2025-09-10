<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Models\User;
use Modules\ModuleRelease1\Services\Admin\UserService;

class UserStatusController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {} 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Toggle user status
        $status = $request->boolean('status');
        $this->userService->toggleStatus($user->id, $status);

       return redirect()->route(module_release_1_meta('kebab').'.admin.users.index')->with('success', 'User status updated successfully.');
    }
}
