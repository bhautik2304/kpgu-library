@php
    use App\Models\{auther, bookcategory, fine};
@endphp

@extends('layouts.admin')

@section('titale', 'Book Add')

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
        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
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
                <label for="bookcategories_id">Category ID</label>
                <select class="form-control" id="status" name="bookcategories_id" required>
                    @foreach (bookcategory::all() as $categury)
                        <option value={{ $categury->id }}>{{ $categury->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="authers_id">Author ID</label>
                <select class="form-control" id="status" name="authers_id" required>
                    @foreach (auther::all() as $auther)
                        <option value={{ $auther->id }}>{{ $auther->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fines_id">Fines ID</label>
                <select class="form-control" id="status" name="fines_id">
                    @foreach (fine::all() as $auther)
                        <option value={{ $auther->id }}>{{ $auther->name }}</option>
                    @endforeach
                </select>
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
