<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AccountUnlockController;
use App\Http\Controllers\AccountUnlockRequestController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/account/unlock/request', [AccountUnlockRequestController::class, 'showRequestForm'])->name('account.unlock.request');
Route::get('/account/unlock/{token}', [AccountUnlockController::class, 'unlock'])->name('account.unlock');
Route::post('/account/unlock/send', [AccountUnlockRequestController::class, 'sendUnlockRequest'])->name('account.unlock.send');


Route::prefix('admin')->namespace('App\\Http\\Controllers')->middleware('auth')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users/create', [AdminController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users/store', [AdminController::class, 'store'])->name('admin.users.store');
    Route::get('admin.dashboard', [UserController::class, 'index'])->name('admin.dashboard');
    Route::delete('dashboard/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::post('/users/{user}/unlock', [UserController::class, 'unlock'])->name('admin.users.unlock');
});

Route::get('user/interface', [UserProfileController::class, 'show'])->name('user.interface');

Route::middleware(['auth', 'admin.security'])->namespace('App\\Http\\Controllers')->get('admin/dashboard', [UserController::class, 'index'])->name('admin');
   
require __DIR__.'/auth.php';
