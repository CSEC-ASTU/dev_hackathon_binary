<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\HallOfFameController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RecomendationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubDivisionController;
use App\Http\Controllers\UserController;
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

// routes for authenticated users
Route::middleware('auth')->group(function () {
    // routes for feed
    Route::get('/home', [FeedController::class,'home'])->name('home');
    Route::get('/feed/add', [FeedController::class,'add'])->name('feed.add');
    Route::post('/feed/add/store', [FeedController::class,'store'])->name('feed.store');
    Route::post('/feed/view/{id}', [FeedController::class,'show'])->name('feed.show');

    // routes for roles
    Route::prefix('/roles')->group(function () {
        Route::get('/', [RoleController::class,'home'])->name('roles.home');
        Route::get('/add', [RoleController::class,'add'])->name('roles.add');
        Route::post('/add/store', [RoleController::class,'store'])->name('roles.store');
        Route::get('/view/{id}', [RoleController::class,'show'])->name('roles.show');
    });

    // routes for events
    Route::prefix('/events')->group(function () {
        Route::get('/', [EventController::class,'home'])->name('events.home');
        Route::get('/add', [EventController::class,'add'])->name('events.add');
        Route::post('/add/store', [EventController::class,'store'])->name('events.store');
        Route::get('/view/{id}', [EventController::class,'show'])->name('events.show');
    });

    // routes for users
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class,'home'])->name('users.home');
        Route::get('/add', [UserController::class,'add'])->name('users.add');
        Route::post('/add/store', [UserController::class,'store'])->name('users.store');
        Route::get('/view/{id}', [UserController::class,'show'])->name('users.show');
    });
    Route::get('/profile', [UserController::class,'profile'])->name('users.profile');

    // routes for divisions
    Route::prefix('/divisions')->group(function () {
        Route::get('/', [DivisionController::class,'home'])->name('divisions.home');
        Route::get('/add', [DivisionController::class,'add'])->name('divisions.add');
        Route::post('/add/store', [DivisionController::class,'store'])->name('divisions.store');
        Route::get('/view/{id}', [DivisionController::class,'show'])->name('divisions.show');
    });

    // routes for subdivisions
    Route::prefix('/subdivisions')->group(function () {
        Route::get('/', [SubDivisionController::class,'home'])->name('subdivisions.home');
        Route::get('/add', [SubDivisionController::class,'add'])->name('subdivisions.add');
        Route::post('/add/store', [SubDivisionController::class,'store'])->name('subdivisions.store');
        Route::get('/view/{id}', [SubDivisionController::class,'show'])->name('subdivisions.show');
    });

    // routes for reports
    Route::prefix('/reports')->group(function () {
        Route::get('/', [ReportController::class,'home'])->name('reports.home');
        Route::get('/add', [ReportController::class,'add'])->name('reports.add');
        Route::post('/add/store', [ReportController::class,'store'])->name('reports.store');
        Route::get('/view/{id}', [ReportController::class,'show'])->name('reports.show');
    });

    // routes for requests
    Route::prefix('/requests')->group(function () {
        Route::get('/', [RecomendationController::class,'requestHome'])->name('requests.home');
        Route::get('/add', [RecomendationController::class,'requestAdd'])->name('requests.add');
        Route::post('/add/store', [RecomendationController::class,'requestStore'])->name('requests.store');
        Route::get('/view/{id}', [RecomendationController::class,'requestShow'])->name('requests.show');
    });

    // routes for halloffames
    Route::prefix('/halloffames')->group(function () {
        Route::get('/', [HallOfFameController::class,'home'])->name('halloffames.home');
        Route::get('/add', [HallOfFameController::class,'add'])->name('halloffames.add');
        Route::post('/add/store', [HallOfFameController::class,'store'])->name('halloffames.store');
        Route::get('/view/{id}', [HallOfFameController::class,'show'])->name('halloffames.show');
    });

    // routes for messages
    Route::prefix('/messages')->group(function () {
        Route::get('/', [MessageController::class,'home'])->name('messages.home');
        Route::get('/add', [MessageController::class,'add'])->name('messages.add');
        Route::post('/add/store', [MessageController::class,'store'])->name('messages.store');
        Route::get('/view/{id}', [MessageController::class,'show'])->name('messages.show');
    });

    Route::get('/notifications', [NotificationController::class,'home'])->name('notifications');
});
