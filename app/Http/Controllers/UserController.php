<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function contact(){
        $categories = Category::all();
        return view('users.contact')->with(['categories' => $categories]);
    }
}
