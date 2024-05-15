<?php

namespace App\Http\Controllers;

use App\Models\bookcategory;
use Illuminate\Http\Request;

class BookcategoryController extends Controller
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
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imgPath = $request->file('img')->store('images', 'public');
        $bannerPath = $request->file('banner')->store('banners', 'public');

        BookCategory::create([
            'name' => $request->name,
            'img' => $imgPath,
            'banner' => $bannerPath,
        ]);

        return redirect()->route('books_category_list')->with('success', 'Book category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(bookcategory $bookcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bookcategory $bookcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bookcategory $bookcategory, $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('images', 'public');
            $bookcategory->find($id)->update([
                'img' => $imgPath,
            ]);
        } else {
        }

        if ($request->hasFile('banner')) {
            $bannerPath = $request->file('banner')->store('banners', 'public');
            $bookcategory->find($id)->update([
                'banner' => $bannerPath,
            ]);
        } else {
        }

        // Update the book category record
        $bookcategory->find($id)->update([
            'name' => $request->name,
        ]);

        // Redirect or respond with a success message
        return redirect()->route('books_category_list')->with('success', 'Book category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bookcategory $bookcategory, $id)
    {
        //
        $bookcategory->destroy($id);
        return redirect()->route('books_category_list')->with('success', 'Book category created successfully.');
    }
}
