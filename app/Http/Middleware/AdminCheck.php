<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        $role = $user->role()->first();
        if (!$role && !$role->access_admin) {
            return response(__('auth.failed'), 422);
        }

        return $next($request);
    }
}
