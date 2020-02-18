<?php

namespace Components\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    /**
     * Display a dashboard of admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(): Response
    {
        return response()->view('admin::dashboard', ['activeLink' => 'dashboard']);
    }
}
