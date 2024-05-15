@extends('layouts.admin')

@section('titale', 'Book Detailed')

@section('body')
    <div class="container mt-5">
        <h2>Create Book</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Book Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="book_img_small">Book Image (Small)</label>
                <input type="file" class="form-control" id="book_img_small" name="book_img_small" required>
            </div>
            <div class="form-group">
                <label for="book_img_banner">Book Image (Banner)</label>
                <input type="file" class="form-control" id="book_img_banner" name="book_img_banner" required>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" required></textarea>
            </div>
            <div class="form-group">
                <label for="books_number">Number of Books</label>
                <input type="number" class="form-control" id="books_number" name="books_number" required>
            </div>
            <div class="form-group">
                <label for="bookcategories_id">Category ID</label>
                <input type="number" class="form-control" id="bookcategories_id" name="bookcategories_id" required>
            </div>
            <div class="form-group">
                <label for="authers_id">Author ID</label>
                <input type="number" class="form-control" id="authers_id" name="authers_id" placeholder="Optional">
            </div>
            <div class="form-group">
                <label for="fines_id">Fines ID</label>
                <input type="number" class="form-control" id="fines_id" name="fines_id" placeholder="Optional">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="number" class="form-control" id="qty" name="qty" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
