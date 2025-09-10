<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;
use Modules\ModuleRelease1\Services\Admin\UserService;
use Modules\ModuleRelease1\Services\Shared\LogActivityService;

class HomeController extends Controller
{
    public function __construct(
        protected LogActivityService $logActivityService,
        protected UserService $userService,
    ) {}
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userService->getAllUser();

        $data = [
            'title' => 'Dashboard',
            'breadcrumbs' => [
                [
                    'name' => 'Dashboard',
                    'url' => route(module_release_1_meta('kebab').'.admin.index'),
                ],
                [
                    'name' => 'Home',
                    'url' => '#',
                ],
            ],
            'recentActivity' => $this->logActivityService->getRecentLogs(),
            'totalUsers' => $users->count()
        ];

        return view(module_release_1_meta('kebab').'::web.admin.dashboard.index', $data);
    }
}
