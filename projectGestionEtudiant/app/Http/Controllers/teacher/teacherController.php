<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class teacherController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        if (! Auth::guard('teacher')->attempt( $request->only('email' , 'password') , $request->filled('remember')))
        {
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password'
            ]);
        }
        return redirect()->intended(route('teacher.home')) ;
    }

    public function destroy()
    {
        Auth::guard('teacher')->logout();
        return redirect('/') ;
    }


}
