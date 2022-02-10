<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index(){
        $books = Book::with('detail')->paginate(10);
        $categories = Category::all();

        return view('books.index')->with(['books' => $books])
                        ->with(['categories' => $categories]);
    }

    public function showBook($bookId) {
        $book = Book::where('id', $bookId)->with('detail')->first();
        $categories = Category::all();

        return view('books.detail')->with(['book' => $book])
                            ->with(['categories' => $categories]);
    }
}