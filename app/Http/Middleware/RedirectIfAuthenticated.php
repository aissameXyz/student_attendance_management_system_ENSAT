<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::guard($guard)->check()) {
                    /** @var User $user */
                    $user = Auth::guard($guard);
    
                    // to Admin dashboard
                    if($user->hasRole('Admin')) {
                        return redirect(route('Admin_dashboard'));
                    }
    
                    // to Teacher dashboard
                    else if($user->hasRole('Teacher')) {
                        return redirect(route('Teacher_dashboard'));
                    }

                    // to Student dashboard
                    else if($user->hasRole('Student')) {
                        return redirect(route('Student_dashboard'));
                    }
                }
            }
        }

        return $next($request);
    }
}
