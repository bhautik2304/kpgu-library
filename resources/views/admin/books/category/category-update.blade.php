@extends('layouts.admin')

@section('titale', 'Book Category Update')

@section('body')
    <div class="container mt-5">
        <h2>Edit Book Category</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bookcategories.update', $bookCategory->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $bookCategory->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img">
                @if ($bookCategory->img)
                    <img src="{{ asset('storage/' . $bookCategory->img) }}" alt="Current Image" width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="banner">Banner</label>
                <input type="file" class="form-control" id="banner" name="banner">
                @if ($bookCategory->banner)
                    <img src="{{ asset('storage/' . $bookCategory->banner) }}" alt="Current Banner" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
