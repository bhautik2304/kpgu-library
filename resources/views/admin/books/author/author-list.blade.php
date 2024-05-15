@extends('layouts.admin')

@section('titale', 'Book Author List')

@section('body')
    <div class="container mt-5">
        <h2>Authors</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('books_author_create') }}" class="btn btn-primary mb-3">Create Author</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Designation</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>{{ $author->name }}</td>
                        <td><img src="{{ asset('storage/' . $author->img) }}" alt="{{ $author->name }}" width="50"></td>
                        <td>{{ $author->designation }}</td>
                        <td>{{ $author->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('books_author_update', $author->id) }}"
                                class="btn btn-sm btn-primary mx-3">Edit</a>
                            <a href="{{ route('author.delete', $author->id) }}" method="POST" style="display:inline;">
                                <span class="btn btn-sm btn-danger">Delete</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
