<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FeedController;
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

Route::get('/', [HomeController::class,'index'])->name('public.home');
Route::post('/account/login', [AccountController::class,'login'])->name('account.login');
Route::post('/account/register', [AccountController::class,'register'])->name('account.register');
Route::get('/account/logout', [AccountController::class,'logout'])->name('account.logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', [FeedController::class,'home'])->name('home');

    // routes for roles
    Route::prefix('/roles')->group(function () {
        Route::get('/', [RoleController::class,'home'])->name('roles.home');
        Route::get('/add', [RoleController::class,'add'])->name('roles.add');
        Route::post('/add/store', [RoleController::class,'store'])->name('roles.store');
        Route::get('/view/{id}', [RoleController::class,'show'])->name('roles.show');
    });

    // routes for users
});
