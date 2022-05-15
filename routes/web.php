<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\InfoController;
use App\Models\User;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $id = auth()->user()->id;
    $user = user::find($id);
    return view('dashboard')->with('user', $user);
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::resource('/students', StudentController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/modules', ModuleController::class);
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::resource('/absence', AbsenceController::class);
    Route::get('/seance', [AbsenceController::class, 'seance']);
   
    
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    
});



// Route::get('/test/students' , [PagesController::class, 'students']);
// Route::get('/test/teachers' , [PagesController::class, 'teachers']);
// Route::get('/test/modules' , [PagesController::class, 'modules']);



Route::get('myinfo/{user}', [InfoController::class, 'info']);

require __DIR__ . '/auth.php';
