<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FiliereController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return redirect('admin_dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// ADMIN DASHBOARD
Route::get('/admin_dashboard', function () {
    return view('Admin');
})->middleware(['auth', 'Admin'])->name('Admin_dashboard');

// Teacher DASHBOARD
Route::get('/Teacher_dashboard', function () {
    return view('Teacher');
})->middleware(['auth', 'Teacher'])->name('Teacher_dashboard');


// Student DASHBOARD
Route::get('/Student_dashboard', function () {
    return view('Student');
})->middleware(['auth', 'Student'])->name('Student_dashboard');

Route::middleware(['auth', 'Admin'])->group(function(){
    // Route::get('/students',function(){

    //     return view('student.index');


    // });
    Route::resource('Filieres',FiliereController::class);
    Route::resource('/students', StudentController::class);
});



require __DIR__.'/auth.php';
