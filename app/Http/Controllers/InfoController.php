<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
class InfoController extends Controller
{
    public function info(string $name){
        
        $student = student::where('first_name','like',$name)->first();
        return view('myinfo')->with('student', $student);
    }
}
