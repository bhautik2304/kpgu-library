@extends('layouts.admin')

@section('titale', 'Students - List')

@section('body')

    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <h2>Approved Students</h2>
            <a href="{{ route('student_add') }}" class="btn btn-primary">
                Add Students
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
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Academic</th>
                    <th>Program</th>
                    <th>Semester</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($approvedStudents as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>
                            @if ($student->avatar)
                                <img src="{{ asset('storage/' . $student->avatar) }}" alt="Avatar" width="50"
                                    height="50">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->number }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->gender ? 'Male' : 'Female' }}</td>
                        <td>{{ $student->academic }}</td>
                        <td>{{ $student->program }}</td>
                        <td>{{ $student->semester }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('students.delete', $student->id) }}">
                                    <i class="nav-icon bi bi-trash3 text-danger"></i>
                                </a>
                                <a href="{{ route('student_update', $student->id) }}">
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
