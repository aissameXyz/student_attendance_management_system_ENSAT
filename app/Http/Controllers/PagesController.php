<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function students()
    {
        return view('test.students');
    }

    public function teachers()
    {
        return view('test.teachers');
    }

    public function modules()
    {
        return view('test.modules');
    }
}
