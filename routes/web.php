<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TinController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsMember;
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

Route::get('/', function () {
    return view('client.index');
});

Route::get('/chitiettin/{id}', [TinController::class, 'chitiet']);
Route::get('/cat/{id}', [TinController::class, 'tintrongloai']);
Route::get('/timkiem', [TinController::class, 'timkiem'])->name('timkiem');


Route::get('login', [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);

Route::get('register', [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);

Route::post('logout', [AuthenController::class, 'logout'])->name('logout');

Route::get('member', [MemberController::class, 'dashboard'])
    ->name('member.dashboard')
    ->middleware(['auth', IsMember::class]);

Route::get('admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', IsAdmin::class]);

Route::get('create', [AdminController::class, 'create'])
    ->name('admin.create');
Route::post('/posts', [AdminController::class, 'store'])
    ->name('admin.store');
Route::get('/posts/{post}', [AdminController::class, 'show'])
    ->name('admin.show');
Route::delete('/posts/{post}', [AdminController::class, 'destroy'])
    ->name('admin.destroy');
Route::get('/posts/{post}/edit', [AdminController::class, 'edit'])
    ->name('admin.edit');
Route::put('/posts/{post}', [AdminController::class, 'update'])
    ->name('admin.update');