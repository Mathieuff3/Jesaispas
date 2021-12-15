<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [DefaultController::class, 'home'])->name('home');
Route::get('/Events', [EventController::class, 'index'])->name('events.index');
Route::get('/Events/create', [EventController::class, 'create'])->name('events.create');
Route::get('/Events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/Events', [EventController::class, 'store'])->name('events.store');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/user/register', [UserController::class, 'register'])->name('register');
Route::post('/user/register', [UserController::class, 'signup'])->name('signup');
Route::get('/user/login', [UserController::class, 'login'])->name('login');
Route::post('/user/login', [UserController::class, 'signin'])->name('signin');
Route::get('/user/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/Event/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::get('/Event/{id}/update', [EventController::class, 'update'])->name('events.update');
