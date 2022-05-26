<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TeacherAuthenticated
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

        if( Auth::check() )
        {
            /** @var User $user */
            $user = Auth::user();

            // if user is not admin take him to his dashboard
            if ( $user->hasRole('Student') ) {
                return redirect(route('Student_dashboard'));
            }
            else if ( $user->hasRole('Admin') ) {
                return redirect(route('Admin_dashboard'));
            }
            else if ( $user->hasRole('Teacher') ){
            return $next($request);}

            else{
                abort(403);
            }



    }
    abort(403);  // permission denied error
    }
}
