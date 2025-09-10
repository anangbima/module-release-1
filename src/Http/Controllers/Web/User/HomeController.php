<?php

namespace Modules\ModuleRelease1\Http\Controllers\Web\User;

use Illuminate\Http\Request;
use Modules\ModuleRelease1\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(
        // protected someService $someService,
    ) {}
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'User Dashboard',
            'breadcrumbs' => [
                [
                    'name' => 'Dashboard',
                    'url' => route(module_release_1_meta('kebab').'.user.index'),
                ],
                [
                    'name' => 'Home',
                    'url' => '#',
                ],
            ],
        ];

        return view(module_release_1_meta('kebab').'::web.user.home.index', $data);
    }
}
