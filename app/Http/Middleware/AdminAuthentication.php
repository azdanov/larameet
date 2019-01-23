<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class AdminAuthentication
{
    /**
     * Determine if the user is an admin.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && (bool) $request->user()->is_admin === true) {
            return $next($request);
        }

        return new RedirectResponse(route('welcome.index'));
    }
}
