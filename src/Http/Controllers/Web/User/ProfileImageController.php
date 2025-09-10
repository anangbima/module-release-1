<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\User;

use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Http\Requests\Web\Shared\UpdateProfileImageRequest;
use Modules\ModuleRelease1\Services\User\ProfileService;

class ProfileImageController extends Controller
{
    public function __construct(
        protected ProfileService $profileService,
    ) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $data = [
            'title' => 'Change Profile Image',
            'user' => auth(module_release_1_meta('snake').'_web')->user(),
        ];

        return view(module_release_1_meta('kebab').'::web.user.profile.image.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileImageRequest $request)
    {
        $this->profileService->updateProfileImage($request->file('image'));

        return redirect()->route(module_release_1_meta('kebab').'.user.profile.index')
            ->with('success', 'Profile image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $this->profileService->removeProfileImage();

        return redirect()->route(module_release_1_meta('kebab').'.user.profile.index')
            ->with('success', 'Profile image removed successfully.');
    }
}
