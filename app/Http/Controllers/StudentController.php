<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email|max:255|unique:students,email',
            'gender' => 'required|boolean',
            'approvel' => 'required|boolean',
            'address' => 'nullable|string|max:255',
            'academic' => 'nullable|string|max:255',
            'program' => 'nullable|string|max:255',
            'semester' => 'nullable|string|max:255',
        ]);


        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }

        student::create([
            'avatar' => $avatarPath,
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'approvel' => $request->approvel,
            'address' => $request->address,
            'academic' => $request->academic,
            'program' => $request->program,
            'semester' => $request->semester,
        ]);


        return redirect()->route('student_list')->with('success', 'student registered successfully.');
    }
    public function registerStudent(Request $request)
    {
        //

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null;
        }

        student::create([
            'avatar' => $avatarPath,
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'approvel' => false,
            'address' => $request->address,
            'academic' => $request->academic,
            'program' => $request->program,
            'semester' => $request->semester,
        ]);

        return redirect()->route('studentlogin')->with('success', 'student registered successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student, $id)
    {
        //
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'password' => 'nullable|string|min:8',
            'gender' => 'required|boolean',
            'approvel' => 'required|boolean',
            'address' => 'nullable|string|max:255',
            'academic' => 'nullable|string|max:255',
            'program' => 'nullable|string|max:255',
            'semester' => 'nullable|string|max:255',
        ]);
        $student->find($id)->update([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
            'gender' => $request->gender,
            'approvel' => $request->approvel,
            'address' => $request->address,
            'academic' => $request->academic,
            'program' => $request->program,
            'semester' => $request->semester,
        ]);

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $student->find($id)->update([
                'avatar' => $avatarPath,
            ]);
        }
        if ($request->password) {
            $student->find($id)->update([
                'password' => Hash::make($request->password),
            ]);
        }

        // Redirect or respond with a success message
        return redirect()->route('student_list')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student, $id)
    {
        //
        $student->destroy($id);
        return redirect()->route('student_list')->with('success', 'student deleted successfully.');
    }
}
