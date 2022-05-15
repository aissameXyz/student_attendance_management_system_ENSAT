<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class adminController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        if (! Auth::guard('admin')->attempt($request->only('email' , 'password'),$request->filled('remember')))
        {
            throw ValidationException::withMessages([
               'email' => 'Invalid email or password .'
            ]);
        }
        return redirect()->intended(route('admin.home')) ;
    }

    public function destroy()
    {
        Auth::guard('admin')->logout() ;
        return redirect('/') ;
    }

    public function filiere()
    {
        $students = DB::table('users')
            ->join('filieres','users.filiere_id', '=','filieres.id')
            ->select(['users.id','users.name','email','label','users.created_at'])
            ->get();

        return View('filiere' , [
            'students' => $students
       ]);
    }

    public function delete_student($id)
    {
        $student = User::find($id) ;
        $student->delete() ;
        return redirect('admin/home') ;
    }

    public function add_student()
    {
        return \view('ajouter.ajouterEtudiant');
    }

    public function store_student(Request $request)
    {
        User::create([
            'name' => $request->name ,
            'email' => $request->email,
            'password' => $request->password ,
            'filiere_id' => $request->filiere ,
        ]);

        return redirect('/admin/home') ;
    }

    public function get_ginf()
    {
        $ginf = DB::table('users')
            ->join('filieres','users.filiere_id', '=','filieres.id')
            ->select(['users.id','users.name','email','label','users.created_at'])
            ->where('filiere_id','=',1)
            ->get();
        return \view('branches/ginf' , [
            'ginf' => $ginf
        ]);
    }

    public function get_gstr()
    {
        $gstr = DB::table('users')
            ->join('filieres','users.filiere_id', '=','filieres.id')
            ->select(['users.id','users.name','email','label','users.created_at'])
            ->where('filiere_id','=',2)
            ->get();
        return \view('branches/gstr' , [
            'gstr' => $gstr
        ]);
    }

}




































