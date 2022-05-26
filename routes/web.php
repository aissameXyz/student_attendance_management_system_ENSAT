<?php


use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\NotificationController;

use App\Http\Controllers\StudentController;
use App\Models\User;


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','Admin'])->name('dashboard');

Route::get('/Admin', function () {
    return view('Admin_dashboard');
})->middleware(['auth','Admin'])->name('Admin_dashboard');

Route::get('/Teacher', function () {
    return view('Teacher_dashboard');
})->middleware(['auth','Teacher'])->name('Teacher_dashboard');

Route::get('/Student', function () {
    return view('Student_dashboard');
})->middleware(['auth','Student'])->name('Student_dashboard');

Route::middleware(['auth', 'Teacher'])->name('teacher.')->prefix('Teacher')->group(function () {
    Route::resource('/absence', AbsenceController::class);
    Route::get('absence/seance/{id}', [AbsenceController::class, 'seanceSheet'])->name('seance');
    Route::post('absence/seanceStart/{id}', [AbsenceController::class, 'seanceStart']);
    Route::post('absence/seanceEnd/{id}', [AbsenceController::class, 'seanceEnd']);
});

Route::middleware(['auth', 'Student'])->group(function(){
    Route::get('/student/absence', [StudentController::class,'absence'])->name('student_absence');
    Route::post('student/absence', [AbsenceController::class, 'presence'])->name("presence");
    Route::get('/Notification', [NotificationController::class, 'index'])->name('home');
    Route::post('/mark-as-read', [NotificationController::class, 'markNotification'])->name('markNotification');
    Route::post('/mark-presence', [AbsenceController::class, 'markPresence'])->name('markPresence');
});



require __DIR__.'/auth.php';
