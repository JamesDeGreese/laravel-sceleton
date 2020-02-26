<?php

namespace Components\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * Show login form
     *
     * @return Response
     */
    public function login(): Response
    {
        return response()->view('admin::login');
    }

    /**
     * Display a dashboard of admin panel.
     *
     * @return Response
     */
    public function dashboard(): Response
    {
        return response()->view('admin::dashboard', ['activeLink' => 'dashboard']);
    }
}
