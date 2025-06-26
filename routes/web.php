<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocalController;
use App\Http\Controllers\ArticleController;

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

Route::get('/students', [StudentController::class, 'index'])->name('student.index');

Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');

Route::get('/create/student', [StudentController::class, 'create'])->name('student.create');
Route::post('/create/student', [StudentController::class, 'store'])->name('student.store');

Route::get('/edit/student/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/edit/student/{student}', [StudentController::class, 'update'])->name('student.update');

Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.delete');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('/registration', [UserController::class, 'create'])->name('user.create');
Route::post('/registration', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::get('/edit/user/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/edit/user/{user}', [UserController::class], 'update')->name('user.update');

    Route::get('/create/article', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/create/article', [ArticleController::class, 'store'])->name('article.store');
    
    Route::get('/edit/article/{article}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/edit/article/{article}', [ArticleController::class, 'update'])->name('article.update');

    Route::delete('/article/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/lang/{locale}', [SetLocalController::class, 'index'])->name('lang');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
