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

        $books = Book::create([
            'title',
            'author',
            'rating',
            'memo',
        ]);

        return view('books.index', compact('books'));
    }
}
