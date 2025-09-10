<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Models\ApiClient;
use Modules\ModuleRelease1\Services\Admin\ApiClientService;

class ApiClientStatusController extends Controller
{
    public function __construct(
        protected ApiClientService $apiClientService
    ) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApiClient $apiClient)
    {
        // Toggle Api Client status
        $status = $request->boolean('status');
        $this->apiClientService->toggleStatus($apiClient->id, $status);

       return redirect()->route(module_release_1_meta('kebab').'.admin.api-clients.index')->with('success', 'Api Client status updated successfully.');
    }
}
