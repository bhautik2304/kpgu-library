@extends('layouts.admin')

@section('titale', 'Book Author Update')

@section('body')
    <div class="container mt-5">
        <h2>Edit Author</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('author.update', $author->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Author Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" required>
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img">
                <img src="{{ asset('storage/' . $author->img) }}" alt="{{ $author->name }}" width="100" class="mt-3">
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation"
                    value="{{ $author->designation }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="1" {{ $author->status ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !$author->status ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
