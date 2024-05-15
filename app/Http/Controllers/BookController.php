<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
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
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'book_img_small' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'book_img_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'desc' => 'required|string',
        //     'bookcategories_id' => 'required|exists:bookcategories,id',
        //     'authers_id' => 'nullable|exists:authers,id',
        //     'fines_id' => 'nullable|exists:fines,id',
        //     'status' => 'required|boolean',
        //     'qty' => 'required|integer',
        // ]);

        $book_img_small_path = $request->file('book_img_small')->store('book_images', 'public');
        $book_img_banner_path = $request->file('book_img_banner')->store('book_images', 'public');

        Book::create([
            'name' => $request->name,
            'book_img_small' => $book_img_small_path,
            'book_img_banner' => $book_img_banner_path,
            'desc' => $request->desc,
            'books_number' => rand(111111, 999999),
            'bookcategories_id' => $request->bookcategories_id,
            'authers_id' => $request->authers_id,
            'fines_id' => $request->fines_id,
            'status' => $request->status,
            'qty' => $request->qty,
        ]);

        return redirect()->route('books_list')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book, $id)
    {
        //
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'desc' => 'required|string',
        //     'books_number' => 'required|integer',
        //     // 'bookcategories_id' => 'required|exists:bookcategories,id',
        //     // 'authers_id' => 'nullable|exists:authors,id',
        //     // 'fines_id' => 'nullable|exists:fines,id',
        //     'status' => 'required|boolean',
        //     'qty' => 'required|integer',
        // ]);
        // dd($request->books_number);
        if ($request->hasFile('book_img_small')) {
            $book_img_small_path = $request->file('book_img_small')->store('book_images', 'public');
            $book->find($id)->update([
                "book_img_small" => $book_img_small_path
            ]);
        }

        if ($request->hasFile('book_img_banner')) {
            $book_img_banner_path = $request->file('book_img_banner')->store('book_images', 'public');
            $book->find($id)->update([
                "book_img_banner" => $book_img_banner_path
            ]);
        }

        $book->find($id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'books_number' => $request->books_number,
            'bookcategories_id' => $request->bookcategories_id,
            'authers_id' => $request->authers_id,
            'fines_id' => $request->fines_id,
            'status' => $request->status,
            'qty' => $request->qty,
        ]);

        return redirect()->route('books_list')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book, $id)
    {
        //
        $book->destroy($id);
        return redirect()->route('books_list')->with('success', 'Book deleted successfully.');
    }
}
