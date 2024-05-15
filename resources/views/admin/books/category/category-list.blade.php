@extends('layouts.admin')

@section('titale', 'Book Category List')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <h2></h2>
            <a href="{{ route('books_category_create') }}" class="btn btn-primary">
                Add Book Category
            </a>
        </div>

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
                    <th>Image</th>
                    <th>Banner</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookCategories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset('storage/' . $category->img) }}" alt="{{ $category->name }}" width="50">
                        </td>
                        <td><img src="{{ asset('storage/' . $category->banner) }}" alt="{{ $category->name }}"
                                width="50"></td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('bookcategories.delete', $category->id) }}">
                                    <i class="nav-icon bi bi-trash3 text-danger"></i>
                                </a>
                                <a href="{{ route('books_category_update', $category->id) }}">
                                    <i class="nav-icon bi bi-pen text-warning"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
