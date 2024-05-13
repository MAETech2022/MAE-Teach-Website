<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MembershipController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['register' => false, 'verify' => false]);


Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/page/{name}', [App\Http\Controllers\HomeController::class, 'page'])->name('page');
Route::get('/page/project/{id}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');
Route::get('/page/service/{id}', [App\Http\Controllers\HomeController::class, 'service'])->name('service');

Route::post('/subscribe', [App\Http\Controllers\SubscriptionController::class, 'subscribe'])->name('subscribe');
Route::post('/save-contact', [App\Http\Controllers\SubscriptionController::class, 'saveContact'])->name('saveContact');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    Route::resource('admin/memberships', MembershipController::class);
});
