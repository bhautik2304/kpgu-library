<?php

namespace App\Http\Controllers;

use App\Models\auther;
use Illuminate\Http\Request;

class AutherController extends Controller
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
            'name' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $imgPath = $request->file('img')->store('images', 'public');

        auther::create([
            'name' => $request->name,
            'img' => $imgPath,
            'designation' => $request->designation,
            'status' => $request->status,
        ]);

        return redirect()->route('books_author_list')->with('success', 'Author created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(auther $auther)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auther $auther)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, auther $auther, $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'designation' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('images', 'public');
            $auther->find($id)->update([
                'img' => $imgPath,
            ]);
        }

        $auther->find($id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'status' => $request->status,
        ]);

        return redirect()->route('books_author_list')->with('success', 'Author updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auther $auther, $id)
    {
        //
        $auther->destroy($id);
        return redirect()->route('books_author_list')->with('success', 'Author deleted successfully.');
    }
}
