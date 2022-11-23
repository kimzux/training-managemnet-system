<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\AttendeeViewController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionViewController;
use App\Http\Controllers\QuestionAnswersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('welcome');
});
Auth::routes(['register'=> false]);
Route::middleware(['auth', 'must-change-password'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('user-management')->group(function () {Route::resource('roles', 'App\Http\Controllers\RoleController', ['except' => ['show', 'create'],]);
        Route::put('users/roles/{user}', [ App\Http\Controllers\UserController::class, 'updateRole', ])->name('users.roles.update');
        Route::resource('users', UserController::class);});
        Route::resource('trainer', TrainerController::class);
        Route::resource('training', TrainingController::class);
        Route::post('attendee-register', [App\Http\Controllers\AttendeeController::class, 'attendee_store'])->name('attendee.register');
        Route::resource('attendee', AttendeeViewController::class);
        Route::resource('questionview', QuestionViewController::class);
        Route::resource('answer', QuestionAnswersController::class);
        Route::get('file/{id}/download', [App\Http\Controllers\TrainingController::class, 'download'])->name('file.download');
});
Route::get('/changePassword', [ App\Http\Controllers\Password_ResetController::class, 'ResetPassword',])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\Password_ResetController::class,'changePasswordPost',])->name('changePasswordPost');
Route::resource('/', LandingController::class);
Route::resource('register', AttendeeController::class);
Route::resource('question', QuestionController::class);
Route::get('timetable/{id}/download', [App\Http\Controllers\TrainingController::class, 'download'])->name('timetable.download');
