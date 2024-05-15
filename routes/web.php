<?php

use App\Http\Controllers\{adminPageController, authController, studentPageController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Students Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [studentPageController::class, 'home']);

Route::get('student/login', [studentPageController::class, '']);

/*
|--------------------------------------------------------------------------
| Library Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/library-admin/login', [adminPageController::class, 'login'])->name('libraryAdminLogin');
Route::post('/admin-login', [authController::class, 'login'])->name('admin.login');
Route::get('/admin-logout', [authController::class, 'logout'])->name('admin.logout');

Route::middleware(['adminAuthenticate'])->prefix('library-admin')->group(function () {
    Route::get('/', [adminPageController::class, 'dashbord'])->name('dashbord');
    Route::get('/student_list', [adminPageController::class, 'student_list'])->name('student_list');
    Route::get('/student_update/{id}', [adminPageController::class, 'student_update'])->name('student_update');
    Route::get('/student_add', [adminPageController::class, 'student_add'])->name('student_add');
    Route::get('/student_detail', [adminPageController::class, 'student_detail'])->name('student_detail');
    Route::get('/student_request', [adminPageController::class, 'student_request'])->name('student_request');

    Route::get('/books_category_list', [adminPageController::class, 'books_category_list'])->name('books_category_list');
    Route::get('/books_category_update/{id}', [adminPageController::class, 'books_category_update'])->name('books_category_update');
    Route::get('/books_category_create', [adminPageController::class, 'books_category_create'])->name('books_category_create');

    Route::get('/books_author_list', [adminPageController::class, 'books_author_list'])->name('books_author_list');
    Route::get('/books_author_update/{id}', [adminPageController::class, 'books_author_update'])->name('books_author_update');
    Route::get('/books_author_create', [adminPageController::class, 'books_author_detail'])->name('books_author_create');

    Route::get('/books_list', [adminPageController::class, 'books_list'])->name('books_list');
    Route::get('/books_detaild', [adminPageController::class, 'books_detaild'])->name('books_detaild');
    Route::get('/books_add', [adminPageController::class, 'books_add'])->name('books_add');
    Route::get('/books_update/{id}', [adminPageController::class, 'books_update'])->name('books_update');

    Route::get('/borrow_books_list', [adminPageController::class, 'borrow_books_list'])->name('borrow_books_list');
    Route::get('/borrow_books_detaild', [adminPageController::class, 'borrow_books_detaild'])->name('borrow_books_detaild');

    Route::get('/report', [adminPageController::class, 'report'])->name('report');

    Route::get('/setting', [adminPageController::class, 'setting'])->name('setting');

    Route::get('/setting_user_list', [adminPageController::class, 'setting_user_list'])->name('setting_user_list');
    Route::get('/setting_user_update/{id}', [adminPageController::class, 'setting_user_update'])->name('setting_user_update');
    Route::get('/setting_user_create', [adminPageController::class, 'setting_user_create'])->name('setting_user_create');

    Route::get('/penalty', [adminPageController::class, 'penalty'])->name('penalty');
});
