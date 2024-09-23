<?php

//controller
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
//middleware
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckCandidate;
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
Route::get('/candidates', [CandidateController::class, 'show'])->name('candidates.show');

Route::put('/candidate/{userId}/update', [CandidateController::class, 'update'])->name('candidate.update');
Route::get('/candidate/{userId}/details', [CandidateController::class, 'detail'])->name('candidate.details');

//end candidate

//posts of jobs
Route::get('/find-jobs', [PostController::class, 'show'])->name('job.show');
Route::post('/create-job', [PostController::class, 'createJob'])->name('create.job')->middleware(CheckEmployerRole::class); // only employer
Route::get('/job/{id}/details', [PostController::class, 'detail'])->name('job.details');
Route::get('/job/{id}/delete', [PostController::class, 'delete'])->name('job.delete');

//users
Route::delete('/user/delete-account', [UserController::class, 'deleteProfile'])->name('delete.profile');
Route::put('/user/change-password', [UserController::class, 'changePassword'])->name('change.Password');
Route::post('/user/{id}/details', [UserController::class, 'detail'])->name('user.details');

// admin dashboard
Route::middleware(['auth', 'verified', CheckAdmin::class])->group(function () {
    Route::get('/admin-dashboard', [adminController::class, 'show'])->name('admin.dashboard');
    Route::put('/update-admin', [adminController::class, 'update'])->name('admin.update');
    Route::get('/set/{id}/admin', [adminController::class, 'setOrRemoveAdmin'])->name('set.admin');
    Route::get('/delete/{id}/user', [adminController::class, 'deleteUser'])->name('delete.user');
    Route::get('post/{id}/status/approve', [adminController::class, 'statusApprove'])->name('status.approve');
    Route::get('post/{id}/status/reject', [adminController::class, 'statusReject'])->name('status.reject');
    Route::get('post/{id}/delete', [adminController::class, 'deletePost'])->name('delete.post');
});
// Applications
Route::middleware(['auth', 'verified', CheckCandidate::class])->group(function () {
    Route::get('apply/{id}/post', [ApplicationController::class, 'create'])->name('apply.post');
    Route::get('cancel/{id}/apply', [ApplicationController::class, 'cancel'])->name('cancel.apply');
});

// employer Applied users
Route::middleware(['auth', 'verified', CheckEmployerRole::class])->group(function () {
    route::get('/applied/{applyId}/user/{candidateId}/approve', [ApplicationController::class, 'approve'])->name('apply.approve');
    Route::get('/applied/{applyId}/user/{candidateId}/reject', [ApplicationController::class, 'reject'])->name('apply.reject');

});
