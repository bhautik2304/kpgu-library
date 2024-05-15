<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\AutherController;
use App\Http\Controllers\BookcategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('students.delete');

Route::post('/book/categories', [BookcategoryController::class, 'store'])->name('bookcategories.store');
Route::put('/book/categories/{id}', [BookcategoryController::class, 'update'])->name('bookcategories.update');
Route::get('/book/categories/{id}', [BookcategoryController::class, 'destroy'])->name('bookcategories.delete');

Route::post('/book/author', [AutherController::class, 'store'])->name('author.store');
Route::put('/book/author/{id}', [AutherController::class, 'update'])->name('author.update');
Route::get('/book/author/{id}', [AutherController::class, 'destroy'])->name('author.delete');

Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::put('/book/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/{id}', [BookController::class, 'destroy'])->name('book.delete');

Route::post('/users', [userController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [userController::class, 'update'])->name('users.update');
Route::get('/users/{id}', [userController::class, 'destroy'])->name('users.delete');
