<?php

namespace Components\Admin\Http\Middleware;

use Closure;
use Components\Auth\Models\User;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();

        if ($user === null) {
            return redirect(route('admin.login'))->with(['success' => false, 'message' => 'You need to be logged in']);
        }

        if ($user->role_id != User::ADMIN_ROLE_ID ) {
            return redirect(route('admin.login'))->with(['success' => false, 'message' => 'You do not have right permissions. Please login as admin']);
        }

        return $next($request);
    }

}
