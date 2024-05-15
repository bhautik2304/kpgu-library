@php
    use App\Models\{auther, bookcategory, fine};
@endphp
@extends('layouts.admin')

@section('titale', 'Book Update')

@section('body')
    <div class="container mt-5">
        <h2>Edit Book</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Book Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
            </div>
            <div class="form-group">
                <label for="book_img_small">Book Image (Small)</label>
                <input type="file" class="form-control" id="book_img_small" name="book_img_small">
                <img src="{{ Storage::url($book->book_img_small) }}" alt="Small Image" width="100" class="mt-2">
            </div>
            <div class="form-group">
                <label for="book_img_banner">Book Image (Banner)</label>
                <input type="file" class="form-control" id="book_img_banner" name="book_img_banner">
                <img src="{{ Storage::url($book->book_img_banner) }}" alt="Banner Image" width="100" class="mt-2">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="desc" required>{{ $book->desc }}</textarea>
            </div>
            <div class="form-group">
                <label for="bookcategories_id">Category ID</label>
                <select value="{{ $book->bookcategories_id }}" class="form-control" id="status" name="bookcategories_id"
                    required>
                    @foreach (bookcategory::all() as $categury)
                        <option value={{ $categury->id }}>{{ $categury->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="authers_id">Author ID</label>
                <select value="{{ $book->authers_id }}" class="form-control" id="status" name="authers_id" required>
                    @foreach (auther::all() as $auther)
                        <option value={{ $auther->id }}>{{ $auther->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fines_id">Fines ID</label>
                <select value="{{ $book->fines_id }}" class="form-control" id="status" name="fines_id">
                    @foreach (fine::all() as $auther)
                        <option value={{ $auther->id }}>{{ $auther->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1" {{ $book->status ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !$book->status ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <label for="qty">Quantity</label>
                <input type="number" class="form-control" id="qty" name="qty" value="{{ $book->qty }}"
                    required>
            </div>
            <input type="hide" class="form-control d-none" id="books_number" name="books_number"
                value="{{ $book->books_number }}">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
