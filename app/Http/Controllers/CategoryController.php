<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function showCategories($categoryId){
        $books = Book::where('category_id', $categoryId)->with('detail')->get();
        $categories = Category::all();
        $currCategory = Category::where('id', $categoryId)->first();

        return view('categories.categories')->with(['books' => $books])
                            ->with(['categories' => $categories])
                            ->with(['currCategory' => $currCategory]);
    }
}
