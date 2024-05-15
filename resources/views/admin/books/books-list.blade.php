@extends('layouts.admin')

@section('titale', 'Book List')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <h2>Books Management</h2>
            <div class="d-flex">
                <a href="{{ route('books_category_list') }}" class="btn btn-primary mx-2">
                    Book Category
                </a>
                <a href="{{ route('books_author_list') }}" class="btn btn-primary mx-2">
                    Book Author
                </a>
                <a href="{{ route('books_add') }}" class="btn btn-primary me-2">
                    Add Book
                </a>
            </div>
        </div>
        <div class="container mt-5">
            <h2>Books</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image (Small)</th>
                        <th>Image (Banner)</th>
                        <th>Description</th>
                        <th>Number of Books</th>
                        <th>Category ID</th>
                        <th>Author ID</th>
                        <th>Status</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td><img src="{{ asset('storage/' . $book->book_img_small) }}" alt="Small Image" width="100">
                            </td>
                            <td><img src="{{ asset('storage/' . $book->book_img_banner) }}" alt="Banner Image"
                                    width="100">
                            </td>
                            <td>{{ $book->desc }}</td>
                            <td>{{ $book->books_number }}</td>
                            <td>{{ $book->bookcategories_id }}</td>
                            <td>{{ $book->authers_id }}</td>
                            <td>{{ $book->status ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $book->qty }}</td>
                            <td>
                                <a href="{{ route('books_update', $book->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('book.delete', $book->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
