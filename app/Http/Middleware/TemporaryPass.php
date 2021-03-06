<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TemporaryPass
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ( $user->hasRole('student') ) {
            return redirect(route('Student_dashboard'));
        }
        else if ( $user->hasRole('admin') ) {
            return redirect(route('Admin_dashboard'));
        }
        else if ( $user->hasRole('teacher') ) {
            return redirect(route('Teacher_dashboard'));
        }
        else if ( $user->hasRole('student') and $user->hasRole('TemporaryPass') ){
            return $next($request);}
    }
}
