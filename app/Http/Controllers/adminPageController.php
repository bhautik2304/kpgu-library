<?php

namespace App\Http\Controllers;

use App\Models\{auther, book, bookcategory, student, User};
use Illuminate\Http\Request;

class adminPageController extends Controller
{
    //

    public function login()
    {
        return view('auth.admin.login');
    }
    public function dashbord()
    {
        return view('admin.dashbord');
    }
    public function student_list()
    {
        $approvedStudents = Student::where('approvel', true)->get();
        return view('admin.students.student-list', compact('approvedStudents'));
    }
    public function student_add()
    {
        return view('admin.students.student-add');
    }
    public function student_update($id)
    {
        $student = student::find($id)->first();
        return view('admin.students.student-update', compact('student'));
    }
    public function student_detail()
    {
        return view('admin.students.student-detaild');
    }
    public function student_request()
    {
        return view('admin.students.student-detaild');
    }
    public function books_category_list()
    {

        $bookCategories = bookcategory::all();
        return view('admin.books.category.category-list', compact('bookCategories'));
    }
    public function books_category_update($id)
    {
        $bookCategory = bookcategory::find($id)->first();
        return view('admin.books.category.category-update', compact('bookCategory'));
    }
    public function books_category_create()
    {
        return view('admin.books.category.category-create');
    }
    public function books_author_list()
    {
        $authors = auther::all();
        return view('admin.books.author.author-list', compact('authors'));
    }
    public function books_author_update($id)
    {
        $author = auther::find($id)->first();
        return view('admin.books.author.author-update', compact('author'));
    }
    public function books_author_detail()
    {
        return view('admin.books.author.author-create');
    }
    public function books_list()
    {
        $books = book::all();
        return view('admin.books.books-list', compact('books'));
    }
    public function books_detaild()
    {
        return view('admin.books.books-detaild');
    }
    public function books_add()
    {
        return view('admin.books.books-add');
    }
    public function books_update($id)
    {
        $book = book::find($id)->first();
        return view('admin.books.books-update', compact('book'));
    }

    public function borrow_books_list()
    {
        return view('admin.bookissued.borrow-books-list');
    }
    public function borrow_books_detaild()
    {
        return view('admin.bookissued.borrow-books-detail');
    }
    public function report()
    {
        return view('admin.report.report');
    }
    public function setting()
    {
        return view('admin.setting.settings');
    }
    public function setting_user_list()
    {
        $users = User::all();
        return view('admin.setting.users.users-list', compact('users'));
    }
    public function setting_user_update($id)
    {
        $user = User::find($id)->first();
        return view('admin.setting.users.users-update', compact('user'));
    }
    public function setting_user_create()
    {
        return view('admin.setting.users.users-create');
    }
    public function penalty()
    {
        return view('admin.penalty.penalty');
    }
}
