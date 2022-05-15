<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function admin() {
        return Auth::guard('admin')->user();
    }

function teacher()
{
    return Auth::guard('teacher')->user() ;
}
