@extends('layouts.admin')

@section('titale', 'Borrow Book Detaild')

@section('body')
    <div class="d-grid gap-2">
        <a type="button" href="{{ route('student_add') }}" class="btn btn-primary">
            Add Students
        </a>
    </div>

@endsection
