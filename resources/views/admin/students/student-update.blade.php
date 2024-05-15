@extends('layouts.admin')

@section('titale', 'Students - Add')

@section('body')
    <div class="container mt-5">
        <h2>Edit Student</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
                @if ($student->avatar)
                    <img src="{{ asset('storage/' . $student->avatar) }}" alt="Avatar" width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control" id="number" name="number" value="{{ $student->number }}"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}"
                    required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="1" {{ $student->gender ? 'selected' : '' }}>Male</option>
                    <option value="0" {{ !$student->gender ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="approvel">Approval</label>
                <select class="form-control" id="approvel" name="approvel" required>
                    <option value="1" {{ $student->approvel ? 'selected' : '' }}>Approved</option>
                    <option value="0" {{ !$student->approvel ? 'selected' : '' }}>Not Approved</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
            </div>
            <div class="form-group">
                <label for="academic">Academic</label>
                <select class="form-control" id="academic" name="academic">
                    <option value="">Select Academic</option>
                    <option value="Pharmacy" {{ $student->academic == 'Pharmacy' ? 'selected' : '' }}>Pharmacy</option>
                    <option value="Nursing" {{ $student->academic == 'Nursing' ? 'selected' : '' }}>Nursing</option>
                    <option value="Physiotherapy" {{ $student->academic == 'Physiotherapy' ? 'selected' : '' }}>
                        Physiotherapy</option>
                    <option value="Engineerning" {{ $student->academic == 'Engineerning' ? 'selected' : '' }}>Engineering
                    </option>
                    <option value="Diploma" {{ $student->academic == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                    <option value="Ayurved" {{ $student->academic == 'Ayurved' ? 'selected' : '' }}>Ayurved</option>
                    <option value="Commerce" {{ $student->academic == 'Commerce' ? 'selected' : '' }}>Commerce</option>
                    <option value="Arts" {{ $student->academic == 'Arts' ? 'selected' : '' }}>Arts</option>
                    <option value="Science" {{ $student->academic == 'Science' ? 'selected' : '' }}>Science</option>
                    <option value="BBA" {{ $student->academic == 'BBA' ? 'selected' : '' }}>BBA</option>
                    <option value="MBA" {{ $student->academic == 'MBA' ? 'selected' : '' }}>MBA</option>
                    <option value="Research" {{ $student->academic == 'Research' ? 'selected' : '' }}>Research</option>
                </select>
            </div>
            <div class="form-group">
                <label for="program">Program</label>
                <input type="text" class="form-control" id="program" name="program" value="{{ $student->program }}">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select class="form-control" id="semester" name="semester">
                    <option value="">Select Semester</option>
                    <option value="1st Sem" {{ $student->semester == '1st Sem' ? 'selected' : '' }}>1st Sem</option>
                    <option value="2nd Sem" {{ $student->semester == '2nd Sem' ? 'selected' : '' }}>2nd Sem</option>
                    <option value="3rd Sem" {{ $student->semester == '3rd Sem' ? 'selected' : '' }}>3rd Sem</option>
                    <option value="4th Sem" {{ $student->semester == '4th Sem' ? 'selected' : '' }}>4th Sem</option>
                    <option value="5th Sem" {{ $student->semester == '5th Sem' ? 'selected' : '' }}>5th Sem</option>
                    <option value="6th Sem" {{ $student->semester == '6th Sem' ? 'selected' : '' }}>6th Sem</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
