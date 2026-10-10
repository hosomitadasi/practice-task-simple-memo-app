<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'memo' => 'nullable|string|max:225',
        ]);

        $book = Book::create($validated);

        return redirect()->route('books.index', $book);
    }
}
