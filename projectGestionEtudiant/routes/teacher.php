<?php

use App\Http\Controllers\teacher\teacherController;
use Illuminate\Support\Facades\Route;

Route::prefix('teacher')->middleware('theme:teacher')->name('teacher.')->group( function () {

    Route::middleware('guest:teacher')->group( function (){
        Route::view('/login' , 'auth.login')->name('login') ;
        Route::post('/login',[teacherController::class , 'store']);
    });
    Route::middleware(['auth:teacher'])->group(function (){
        Route::post('/logout',[teacherController::class , 'destroy'])->name('logout') ;
        Route::view('/home' , 'home')->name('home') ;
    });

});
