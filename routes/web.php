<?php

//controller
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
//middleware
use App\Http\Middleware\CheckEmployerRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('verified')->group(function () {
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('user.profile');

});
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::middleware(['auth', 'verified'])->group(function () {});

//employers
Route::get('/employers', [EmployerController::class, 'show'])->name('employers.show');
// backend
Route::put('/employer/{userId}/update', [EmployerController::class, 'update'])->name('employer.update');
Route::get('/employer/{userId}/details', [EmployerController::class, 'detail'])->name('employer.details');

//candidates
Route::put('/candidate/{userId}/update', [CandidateController::class, 'update'])->name('candidate.update');
Route::get('/candidates', [CandidateController::class, 'show'])->name('candidates.show');
//end candidate

//posts of jobs
Route::get('/find-jobs', [PostController::class, 'show'])->name('job.show');
Route::post('/create-job', [PostController::class, 'createJob'])->name('create.job')->middleware(CheckEmployerRole::class); // only employer
Route::get('/job/{id}/details', [PostController::class, 'detail'])->name('job.details');

Route::delete('/user/delete-account', [UserController::class, 'deleteProfile'])->name('delete.profile');
Route::put('/user/change-password', [UserController::class, 'changePassword'])->name('change.Password');
