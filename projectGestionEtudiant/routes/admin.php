<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('theme:admin')->name('admin.')->group( function (){
    Route::middleware(['guest:admin'])->group( function (){
        Route::view('/login' , 'auth.login')->name('login');
        Route::post('/login',[adminController::class , 'store']) ;
    });

    Route::middleware('auth:admin')->group( function (){
        Route::post('/logout' , [adminController::class , 'destroy'])->name('logout') ;
        Route::view('/home' , 'home')->name('home') ;
        Route::get('/filiere' , [adminController::class , 'filiere'])->name('filiere') ;
        Route::get('/delete_student/{id}' , [adminController::class , 'delete_student'])->name('delete_student') ;


        Route::get('/add_student' , [adminController::class , 'add_student'])->name('add_student') ;
        Route::post('/add_student',[adminController::class , 'store_student'])->name('store_student') ;


        // routing of branches :
        Route::get('/ginf' , [adminController::class , 'get_ginf'])->name('ginf') ;
        Route::get('/gstr' , [adminController::class , 'get_gstr'])->name('gstr') ;

    });

});




















